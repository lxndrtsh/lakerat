<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller {

    private $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function __getViewData()
    {
        $dates = [
            (new \DateTime())->format('Y-m-d'),
            (new \DateTime())->modify('-2 days')->format('Y-m-d'),
            (new \DateTime())->modify('-3 days')->format('Y-m-d'),
            (new \DateTime())->modify('-4 days')->format('Y-m-d'),
            (new \DateTime())->modify('-5 days')->format('Y-m-d'),
            (new \DateTime())->modify('-6 days')->format('Y-m-d'),
        ];


        $i = 0;
        foreach($dates as $key=>$date) {
            $view = View::selectRaw('sum(views) as view_count')->whereRaw("date(updated_at) = '".$date."'")->first();
            if($view->view_count == null) { $view->view_count = 1; }
            $return[] = [
                substr($date,-2),
                (int)$view->view_count
            ];
            $i++;
        }


        //[[0,0],[1,0],[2,1],[3,2],[4,21],[5,9],[6,12],[7,10],[8,31],[9,13],[10,65],[11,10],[12,12],[13,6],[14,4],[15,3],[16,0]];

        return (array)$return;
    }

    public function __getBrowserData()
    {

        $ie = number_format((View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->where('browser','Internet Explorer')->count() / View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->count()) * 100);
        $firefox = number_format((View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->where('browser','Firefox')->count() / View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->count()) * 100);
        $chrome = number_format((View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->where('browser','Chrome')->count() / View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->count()) * 100);
        $mobile = number_format((View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->where('browser','Handheld Browser')->count() / View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->count()) * 100);
        $unknown = number_format((View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->where('browser','Unknown Browser')->count() / View::whereRaw('updated_at > NOW() - INTERVAL 30 DAY')->count()) * 100);


        $return = [
            [
                'label' => 'Chrome',
                'value' => $chrome
            ],
            [
                'label' => 'Firefox',
                'value' => $firefox
            ],
            [
                'label' => 'IE',
                'value' => $ie
            ],
            [
                'label' => 'Mobile',
                'value' => $mobile
            ],
            [
                'label' => 'Other',
                'value' => $unknown
            ]
        ];

        return Response::json($return);
    }

}
