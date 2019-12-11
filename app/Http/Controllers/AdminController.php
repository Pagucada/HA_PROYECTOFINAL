<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Mostrar vistas de listado de marcas en la DB, vistas de creación y edición de marcas:
    public function showBrands()
    {
        $brands = Brand::all();
        return view(
            'admin.brands',
            [
                'brands' => $brands
            ]
        );
    }

    public function showBrandCreate()
    {
        return view('admin.brandCreate');
    }

    public function showBrandEdit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brandEdit', ['brand' => $brand]);
    }
    /*        FIN DE METODOS DE MOSTRAR VISTAS DE MARCAS EN DB      */


    // Crear marca:
    public function createBrand(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands'
        ]);
        $brand = Brand::create($request->all());
        return redirect('admin/marcas')
            ->with('message', 'La marca ' . $brand->name . ' ha sido agregada a la base de datos.');
    }

    // Editar marca:
    public function editBrand(Request $request, $id)
    {
        $brand = Brand::find($id);
        // Compruebo si la marca introducida ya existe:
        $this->validate($request, Brand::$validationRules, Brand::$validationRulesMessages);
        // Si no existe, creo esa marca y redirecciono hacia la lista de marcas:
        $brand->update($request->all());
        return redirect('/admin/marcas')
            ->with('message', 'La marca ahora conocida como "' . $brand->name . '" ha sido modificada correctamente.');
    }

    // Eiliminar marca: 
    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brandName = $brand->name;
        $brand->delete();
        return redirect('/admin/marcas')
            ->with('message', 'La marca ' . $brandName . ' ha sido destruida correctamente.');
    }

    // Mostrar vistas de listado de autos en la DB, creación de autos y edición de autos:
    public function showCars()
    {
        $cars = Car::all();
        return view('admin.cars', ['cars' => $cars]);
    }

    public function showCarCreate()
    {
        $brands = Brand::all();
        $models = CarModel::all();
        return view('admin.carCreate', [
            'brands' => $brands,
            'models' => $models
        ]);
    }

    public function showCarEdit($id)
    {
        $car = Car::find($id);
        $brands = Brand::all();
        $models = CarModel::all();
        return view('admin.carEdit',
            [
                'car' => $car,
                'brands' => $brands,
                'models' => $models
            ]
        );
    }
    /*        FIN DE METODOS DE MOSTRAR VISTAS DE AUTOS EN DB      */

    // Crear auto:
    public function createCar(Request $request)
    {
        $car = Car::create($request->all());
        if ($request->file('image') != null) 
        {
            // Obtenemos el nombre original de la imagen
            $fileName = $request->image->getClientOriginalName();
            // Ruta con nombre de imagen
            $request->file("image")->storeAs("cars", $fileName, "public");
            $path = "cars/" . $fileName;
            $car->image = $path;
            $car->save();  
        }
    

        return redirect('admin/autos')
            ->with('message', 'El auto ' . $car->brand->name . ' ' . $car->car_model->name . ' se ha creado correctamente.');
    }

    // Editar auto:
    public function editCar(Request $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return redirect('admin/autos')
            ->with('message', 'El auto ' . $car->brand . ' ' . $car->name . ' se ha editado correctamente.');
    }

    // Eliminar auto:
    public function deleteCar($id)
    {
        $car = Car::find($id);
        $brand = $car->brand->name;
        $carModel = $car->car_model->name;
        $car->delete();
        return redirect()
            ->back()
            ->with('message', 'El auto ' . $brand . ' ' . $carModel . ' se ha eliminado correctamente');
    }

    // Mostrar vistas de listado de modelos en la DB, vistas de creación y edicón de modelos.
    public function showModels() {
        $models = CarModel::all();
        return view('admin.models', [
            'models' => $models
        ]);
    }
    public function showModelCreate() {

        $brands = Brand::all();

        return view('admin.modelCreate', [
            'brands' => $brands
        ]);
    }
    public function showModelEdit($id) {
       
        $model = CarModel::find($id);
        $brands = Brand::all();

        return view('admin.modelEdit', [
            'model' => $model,
            'brands' => $brands
        ]);
    }
    /*        FIN DE METODOS DE MOSTRAR VISTAS DE MODELOS EN DB       */

    // Crear modelo:
    public function createModel(Request $request) 
    {
        $request->validate([
            "name" => "required|unique:car_models",
            "brand_id" => "required|exists:brands,id"
        ]);
        $newCarModel = CarModel::create($request->all());
        return redirect('/admin/modelos')
        ->with('message', "El modelo {$newCarModel->name} se ha creado exitosamente");
    }

    // Editar modelo:
    public function editModel(Request $request, $id)
    {
        $editedCarModel = CarModel::find($id);
        $editedCarModel->update($request->all());

        return redirect('/admin/modelos')
        ->with('message', "El modelo {$editedCarModel->name} ha sido editado exitosamente.");
    }
}
