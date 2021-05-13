{{-- @extends direktyvai nurodom, kokį vaizdą paveldės šis vaizdas --}}
@extends('layouts.admin')

{{-- sukuriam sekciją pavadinimu title, kurios reikšmė yra Dashboard --}}
{{-- šią sekciją galite iškviesti layouts/admin.blade.php vaizde su direktyva @yield('title')  --}}
@section('title', 'Dashboard')

{{-- sukuriam sekciją pavadinimu content, kurios reikšmė gali būti kodas iš kelių eilučių, todėl ši sekcija turi pabaigą @endsection  --}}
{{-- šią sekciją galite iškviesti layouts/admin.blade.php vaizde su direktyva @yield('content')  --}}
@section('content')
    <div><img class="mx-auto d-block w-40 p-1" src="/img/logo.png" alt="logo"></div>
    <div style="text-align: center;">Welcome to the admin panel. Please select the menus from the left.</div>
@endsection
