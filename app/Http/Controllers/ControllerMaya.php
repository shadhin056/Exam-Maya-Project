<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use App\Http\Requests;
class ControllerMaya extends Controller
{
    /**
     * $appId
     * @var [int]
     */
    protected $appId;
    /**
     * [$appSecret description]
     * @var [string]
     */
    protected $appSecret;
    /**
     * [$tokenExchangeUrl description]
     * @var [type]
     */
    protected $tokenExchangeUrl;
    /**
     * [$endPointUrl description]
     * @var [type]
     */
    protected $endPointUrl;
    /**
     * [$userAccessToken description]
     * @var [type]
     */
    public $userAccessToken;
    /**
     * [$refreshInterval description]
     * @var [type]
     */
    protected $refreshInterval;
    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->appId            = config('accountkit.app_id');
        $this->client           = new GuzzleHttpClient();
        $this->appSecret        = config('accountkit.app_secret');
        $this->endPointUrl      = config('accountkit.end_point');
        $this->tokenExchangeUrl = config('accountkit.tokenExchangeUrl');
    }
    /**
     * [login description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function login(Request $request)
    {

        return view('index1');

    }

    public function logout()
    {
        return redirect()->route('index');
    }
    public function index()
    {
        return view('welcome');
    }
}