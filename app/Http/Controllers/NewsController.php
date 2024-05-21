<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function teknologi()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-berita-indonesia.vercel.app/cnn/teknologi/');
        $news = json_decode($response->getBody()->getContents());
        dd($news);
        // $news = $news->data->posts;
        // link, title, pubDate, description, thumbnail
        return view('news.teknologi', compact('news'));
    }
    public function internasional()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-berita-indonesia.vercel.app/cnn/internasional/');
        $news = json_decode($response->getBody()->getContents());
        // dd($news->data->posts);
        $news = $news->data->posts;
        // link, title, pubDate, description, thumbnail
        return view('news.internasional', compact('news'));
    }

    public function hiburan()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-berita-indonesia.vercel.app/cnn/hiburan/');
        $news = json_decode($response->getBody()->getContents());
        // dd($news->data->posts);
        $news = $news->data->posts;
        // link, title, pubDate, description, thumbnail
        return view('news.hiburan', compact('news'));
    }

    public function olahraga()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-berita-indonesia.vercel.app/cnn/olahraga/');
        $news = json_decode($response->getBody()->getContents());
        // dd($news->data->posts);
        $news = $news->data->posts;
        // link, title, pubDate, description, thumbnail
        return view('news.olahraga', compact('news'));
    }
    public function ekonomi()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-berita-indonesia.vercel.app/cnn/ekonomi/');
        $news = json_decode($response->getBody()->getContents());
        // dd($news->data->posts);
        $news = $news->data->posts;
        // link, title, pubDate, description, thumbnail
        return view('news.ekonomi', compact('news'));
    }
}
