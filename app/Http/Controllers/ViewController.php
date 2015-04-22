<?php namespace App\Http\Controllers;

use App\View;

/**
 * Class ViewController
 * @package App\Http\Controllers
 */
class ViewController extends Controller
{
    /** @var string */
    protected $ip;

    /** @var string */
    protected $agent;

    public function __construct(View $view)
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->view = $view;
    }

    public function trigger()
    {
        $total_views = $this->view->where('ip_address',$this->ip)->count();
        if($total_views > 0) {
            $current_view = $this->view->where('ip_address',$this->ip)->first();
            $update = $this->view->find($current_view->id);
            $update->views = $update->views+1;
            $update->save();
        } else {
            $now = new \DateTime;
            $this->view->create([
                'ip_address' => $this->ip,
                'views' => 1,
                'browser' => $this->__browser(),
                'os' => $this->__os(),
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }

    protected function __os()
    {
        $os_platform = "Unknown OS Platform";
        $os_array =  [
            '/windows nt 10/i'     =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        ];

        foreach ($os_array as $regex => $value) {
            if (preg_match($regex, $this->agent)) {
                $os_platform = $value;
            }
        }
        return $os_platform;
    }

    protected function __browser()
    {
        $browser = "Unknown Browser";
        $browser_array  =   array(
            '/msie/i'       =>  'Internet Explorer',
            '/firefox/i'    =>  'Firefox',
            '/safari/i'     =>  'Safari',
            '/chrome/i'     =>  'Chrome',
            '/opera/i'      =>  'Opera',
            '/netscape/i'   =>  'Netscape',
            '/maxthon/i'    =>  'Maxthon',
            '/konqueror/i'  =>  'Konqueror',
            '/mobile/i'     =>  'Handheld Browser'
        );

        foreach ($browser_array as $regex => $value) {
            if (preg_match($regex, $this->agent)) {
                $browser = $value;
            }
        }
        return $browser;
    }

}