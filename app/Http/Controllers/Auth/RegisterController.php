<?php

namespace App\Http\Controllers\Auth;

use App\Constract\Interfaces\RegisterInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
use App\Http\Requests\RegisterFreelancerRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\RegisterService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{
    // use AuthenticatesUsers;
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $registerinterface;
    private RegisterService $registerService;

    public function __construct(RegisterInterface $registerInterface, RegisterService $registerService)
    {
        // $this->middleware('auth');
        $this->registerinterface = $registerInterface;
        $this->registerService = $registerService;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        event(new Registered($user = $this->create($request->validated())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = User::create($data);
        return $user;
    }

    public function RegisterFreelancerStore(RegisterFreelancerRequest $request)
    {
        $freelancer = $request->validated();
        $this->registerService->FreelancerRegister($freelancer);

        return redirect('adventure')->with('succes', 'succes aount created');
    }

    public function RegisterFreelancerGoogleStore()
    {
        $user = $this->registerService->FreelancerRegisterGoogle([]);

        return redirect('journey')->with('success', "complete this form!");
    }

    public function RegisterFreelancerStoreNextGoogle(RegisterFreelancerGoogleUpdtaeRequest $request, int $user_id)
    {
        // Session::get("user")
        // dd($user);
        // $user = auth()->user();
        $user = $this->registerinterface->signUpFreelancerGoogle($request->validated(), id: $user_id);
        auth()->login($user);
        // dd(auth()->id());
        // dd(auth()->user());
        // dd(route('adventure'));
        return redirect()->route('adventure')->with('success', 'created acount success');
    }
}
