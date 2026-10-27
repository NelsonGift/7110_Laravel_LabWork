namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $message = "Welcome to our Laravel Application!";
        return view('welcome-message', compact('message'));
    }
}