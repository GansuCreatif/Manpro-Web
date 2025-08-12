use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitProjectController;

Route::get('/v1/master/unit-project/all', [UnitProjectController::class, 'getAll']);
