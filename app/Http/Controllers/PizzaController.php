<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {

        $filePath = base_path() . '/last_option.txt';
        if (file_get_contents($filePath) == "") {
            return $this->overview();

        } else {
            return $this->busyScreen();

        }
    }

    private function overview() {
        return view('main');
    }

    private function busyScreen() {
        $filePath = base_path() . '/last_option.txt';
        $content = file_get_contents($filePath);
        $content = json_decode($content, true);

        return view('busy', ['content' => $content]);

    }

    public function apple() {
        $this->writeToFile('apple', 'Apple Store');
        return redirect('/');
    }

    public function science() {
        $this->writeToFile('science', 'Science center');
        return redirect('/');
    }

    public function starbucks() {
        $this->writeToFile('starbucks', 'Starbucks');
        return redirect('/');
    }

    private function writeToFile($content, $name) {
        $filePath = base_path() . '/last_option.txt';

        $data = [];
        $data['content'] = $content;
        $data['name'] = $name;

        file_put_contents($filePath, json_encode($data));
    }
}
