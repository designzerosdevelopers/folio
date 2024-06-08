<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use TCPDF;
use TCPDF_FONTS;
use Spatie\LaravelPdf\Facades\Pdf;

class AdminsettingController extends Controller
{

    public function wkPDF()
    {
        // Command to execute wkhtmltopdf with the specified options
        $command = '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe" --page-size A4 --margin-top 0 --margin-right 0 --margin-bottom 0 --margin-left 0 D:\laravel-code\portfolio\public\perfect.html wkcv.pdf';
        // Execute the command
        exec($command, $output, $return);

        // Check if the command executed successfully
        if ($return === 0) {
            // Success
            echo 'PDF generated successfully.';
        } else {
            // Error
            echo 'Error generating PDF. Check your command and try again.';
        }
    }


    public function mupdf()
    {

        // Get the input PDF file path
        $inputPdf = 'D:\\laravel-code\\portfolio\\public\\cv.pdf';

        // Define the replacement text
        $searchText = 'John Doe';
        $replaceText = 'Shahab Saqib';

        // Define the output PDF file path
        $outputPdf = 'D:\\laravel-code\\portfolio\\public\\mupdf\\mu.pdf';

        // Define the command to run mutool
        $command = 'D:\\laravel-code\\portfolio\\public\\mupdf\\mutool.exe' . " clean " . $inputPdf . " " . $outputPdf . " replace-text " . $searchText . " " . $replaceText;

        // Initialize variables to capture command output and return status
        $output = [];
        $returnVar = 0;

        // Execute the command and capture both stdout and stderr
        exec($command . ' 2>&1', $output, $returnVar);

        // Check for errors
        if ($returnVar !== 0) {
            // If there's an error, $output contains the error message
            return response()->json(['error' => 'Failed to execute mutool command. Output: ' . implode("\n", $output)], 500);
        }

        // Return the path to the modified PDF
        return response()->json(['output_pdf' => $outputPdf], 200);
    }


    public function generatePDF()
    {
        // Create new PDF document
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(auth()->user()->name ?? 'Guest');
        $pdf->SetTitle('CV');
        $pdf->SetSubject('Curriculum Vitae');
        $pdf->SetKeywords('TCPDF, PDF, CV, resume');

        // Set default header and footer data
        $pdf->setHeaderData('sshhs', 0, '', '');

        // Set margins
        $pdf->SetMargins(15, 15, 15, true);

        // Add a page
        $pdf->AddPage();

        $fontfile = public_path('fontawesome/webfonts/fa-solid-900.ttf');
       
        $fontawesome = TCPDF_FONTS::addTTFfont($fontfile, 'TrueTypeUnicode', '', 96);

        $pdf->SetFont($fontawesome, '', 14);

        // Define height of the dark portion (adjust as needed)
        $darkHeight = $pdf->getPageHeight() / 11;

        // Draw vertical line with different colors
        $pdf->SetLineStyle(array('width' => 100, 'color' => array(40, 41, 40)));
        $pdf->Line(30, 0, 30, $darkHeight);

        $pdf->SetLineStyle(array('width' => 100, 'color' => array(0, 102, 255)));
        $pdf->Line(30, $darkHeight, 30, $pdf->getPageHeight());


        // $pdf->SetLineStyle(array('width' => 0.5, 'color' => array(255, 255, 255)));
        // $pdf->Line(15, 116, 60, 116);

        // $pdf->SetLineStyle(array('width' => 0.5, 'color' => array(255, 255, 255)));
        // $pdf->Line(15, 203, 60, 203);


        // $pdf->SetDrawColor(0);
        // $pdf->SetFillColor(0, 0, 0);
        // $pdf->Circle(94, 35, 2, 0, 360, 'F');
        // $pdf->Circle(94, 127, 2, 0, 360, 'F');
        // $pdf->Circle(94, 188, 2, 0, 360, 'F');
        // $pdf->Circle(94, 227, 2, 0, 360, 'F');

        $leftColumn = '
             <div style="color: white; padding: 10px; height: 100%;">
            <img src="' . public_path('profile_pic/noImage.jpg') . '" alt="Profile Image" width="100" style="border-radius: 50%; margin-bottom: 20px;">
            <h1>Personal Info</h1>
            <p><i style="font-family:' . $fontawesome . ';">&#xf007;</i><strong> John Doe</strong></p>
            <p><i style="font-family:' . $fontawesome . ';">&#xf0e0;</i><strong> john@example</strong></p>
            <p><i style="font-family:' . $fontawesome . ';">&#xf095;</i><strong> +1234567890</strong></p>
            <p><i style="font-family:' . $fontawesome . ';">&#xf015;</i><strong> 123 Main Street</strong></p>
            
            <h1>Skill</h1>
            <p><strong>Php </strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>
            <p><strong>Laravel</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>
            <p><strong>Vue</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>
            <p><strong>Html</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i> </p>
            <p><strong>Css</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>
            <p><strong>Bootstrap</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>
            <p><strong>Javascript</strong> <i style="font-family:' . $fontawesome . ';">&#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</i></p>

            <h1>Languages</h1>
            <p><strong>English</strong> - Fluent</p>
            <p><strong>Urdu</strong> - Native</p>
            <p><strong>Sindhi</strong> - Native</p>
        </div>';

        // Experience, Skills, and Additional Information
        $rightColumn = '
        <div style="padding: 10px;">

            <h1>About me</h1>
            <p style="font-family: Times New Roman, Helvetica, sans-serif">As a PHP Laravel developer with 1.5 years of experience, I specialize in crafting dynamic, scalable web applications. With expertise in developing Content Management Systems (CMS), Customer Relationship Management (CRM) platforms, Social Networking Sites (SNS), and portfolio builders, I deliver high-performance, user-friendly solutions. Proficient in modern web development practices, I\'m dedicated to innovative project execution. My tenure at Design Zeros has been instrumental, where I\'ve not only expanded my skill set but also mentored junior developers, fostering a collaborative and growth-oriented environment.</p>

            <h1>Education</h1>
            <p>Bachelor of Science - Degree Collage Mirpur Mathelo, 2017 - 2021</p>
            <p>InterMe - Degree Collage Mirpur Mathelo, 2015 - 2017</p>
            <p>Bachelor of Science - Degree Collage Mirpur Mathelo, 2013 - 2015</p>

            <h2>Experience</h2>
            <p>Software Engineer - Company Name, Year-Present</p>
            <p>Intern - Company Name, Year</p>

            <h1>Skills</h1>
            <ul>
                <li>PHP</li>
                <li>Laravel</li>
                <li>JavaScript</li>
                <li>HTML/CSS</li>
            </ul>
        </div>';

        $html = '
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td width="45%" style="color: white; vertical-align: top;"> 
                    ' . $leftColumn . '
                </td>
                <td width="5%"></td>
                <td width="50%" style="vertical-align: top;">
                    ' . $rightColumn . '
                </td>
            </tr>
        </table>';

        // Set the font for the main content
        $pdf->SetFont('helvetica', '', 12);

        // Write the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Close and output PDF document
        $pdf->Output(public_path('cv.pdf'), 'F');

        return response()->download(public_path('cv.pdf'))->deleteFileAfterSend(true);

    }


    public function indexsitetemplates()
    {
        $templates = Template::where('temp_type', 'pf')->get();
        return view('admin.site-template', ['templates' => $templates]);
    }

    public function templatesettingstore(Request $request)
    {
        $userId = Auth::id();
        $user = User::find($userId);

        // Make sure 'porfolio_id' is the correct column name in your database
        $user->portfolio_id = $request->temp_id;
        $user->save();
        return redirect()->back()->with('sucess', 'Your template successfully changed');
    }

    public function visibility(Request $request, $id, $modelName)
    {

        $modelClass = app()->make("App\\Models\\$modelName");


        $model = $modelClass::find($id);


        $model->visibility = $request->visibility;


        $model->save();


        return redirect()->back()->with('success', 'Saved successfully.');
    }
}
