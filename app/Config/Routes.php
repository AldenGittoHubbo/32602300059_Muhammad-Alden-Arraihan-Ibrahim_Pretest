<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pretest', 'Praktikum::pretest');
$routes->get('/profil', 'Profil::index');
$routes->get('/mahasiswa/tambah', 'Mahasiswa::tambah');
$routes->get('/mahasiswa/tampil', 'Mahasiswa::tampil');
