<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\User;
use App\Models\Service;
use App\Models\Template;
use App\Models\Skill;
use App\Models\Work;
use App\Models\Image;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use TCPDF;
;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\Pdf;





class SiteviewController extends Controller
{
    public function index($user_name)
    {
        $user = User::where('email', $user_name)->firstOrFail();
        $temp = Template::where('id', $user->portfolio_id)->firstOrFail();
        $services = Service::where('user_id', $user->id)->get();

        foreach ($services as $service) {
            if ($service->icon_id > 0) {
                $icon = Icon::find($service->icon_id);
                if ($icon) {
                    $service->service_title = $icon->svg_title;
                    $service->svg_icon_code = $icon->svg;
                }
            }
        }

        $skills = Skill::where('user_id', $user->id)->get();


        $works = Work::where('user_id', $user->id)->get();
        foreach ($works as $work) {
            $image = Image::where('work_id', $work->id)->first();
            $work->thumbnail = $image->work_photos;
        }

        $experiences = Experience::where('user_id', $user->id)->get();

        return view('portfolio.' . $temp->temp_name . '.index', [
            'user' => $user,
            'services' => $services,
            'skills' => $skills,
            'works' => $works,
            'experiences' => $experiences
        ]);
    }

    public function portfolioImages(Request $request)
    {
        $images = Image::where('work_id', $request->id)->get();

        return view('portfolio/workImages', ['images' => $images, 'username' => $request->username]);
    }


    function getImage($work_id)
    {
        $images = Image::where('work_id', $work_id)->get(["work_photos"]);
        $work = Work::where('id', $work_id)->first(); // Assuming there's only one work with this ID
        $response = [
            'images' => $images,
            'work' => $work,
        ];
        return response()->json($response);

    }

    function ViewCv($user)
    {
        $user = User::where('email', $user)->first();
        $cv_id = $user->cv_id;
        $experience = Experience::where('user_id', $user->id)->get();
        $work = Work::where('user_id', $user->id)->get();
        $skills = Skill::where('user_id', $user->id)->get();
        $cv = Template::where('id', $cv_id)->first();
        $education = Education::where('user_id', $user->id)->get();
        return view('cv.tao', ['user' => $user, 'educations' => $education, 'Experiences' => $experience, 'skills' => $skills, 'works' => $work]);
    }





    // function download_cv()
    // {
    //     // Fetch dynamic data from your database
    //     // $user_id = 2; // Example user ID
    //     // $experience = Experience::where('user_id', $user_id)->get();
    //     // $work = Work::where('user_id', $user_id)->get();
    //     // $skills = Skill::where('user_id', $user_id)->get();
    //     // $education = Education::where('user_id', $user_id)->get();

    //     // // Load CV template (assuming you have a dynamic logic to select the template)
    //     // $cv_id = 1; // Example CV ID
    //     // $cv = Template::find($cv_id);

    //     // // Pass data to the view
    //     // $data = [
    //     //     'experience' => $experience,
    //     //     'work' => $work,
    //     //     'skills' => $skills,
    //     //     'education' => $education,
    //     //     'cv' => $cv
    //     // ];


    //     $dompdf = new Dompdf();
    //     $html = view('cv.tao')->render(); // Render the Blade view
    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();

    //     return $dompdf->stream('example.pdf');

    //     // // Load the CV template view with the data
    //     // $pdf = Pdf::loadView('cv.tao', $data);

    //     // // Download the generated PDF
    //     // return $pdf->download('document.pdf');
    // }

    public function download_cv()
    {
        // Create a new PDF document
        $pdf = new TCPDF();

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('TCPDF Example');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // Set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Add a page
        $pdf->AddPage();

        // Set some content to print
        $html = '<h1>Welcome to TCPDF Tutorial</h1>
                <i>This is a sample text printed with <b>TCPDF</b>.</i>';

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // Output PDF document
        $pdf->Output('example_001.pdf', 'I');
    }
}





