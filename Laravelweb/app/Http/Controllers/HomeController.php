<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\ShareData;

class HomeController extends Controller
{
    //首頁
    public function indexPage()
    {
        $name = 'home';
        $binding = [
            'title' => ShareData::TITLE,
            'name' => $name,
        ];
        return view('home', $binding);
    }
}
?>