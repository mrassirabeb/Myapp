<?php 
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\SocialProvider;
class SocialAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function redirect($service) {
        return Socialite::driver ( $service )->redirect ();
    }
    public function callback($service) {
      try
        {
            $socialUser = Socialite::driver($service)->user();
        } 
        catch(\Exception $e)
        {
            return redirect('/');
        }
        //check if we have logged provider
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider)
        {
            //create a new user and provider
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()]
            );

            $user->socialProviders()->create(
                ['provider_id' => $socialUser->getId(), 'provider' => $service]
            );

        }
        else
            $user = $socialProvider->user;

        auth()->login($user);

        return redirect('/basic-form-element');
}
}