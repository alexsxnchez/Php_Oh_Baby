@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-10 mb-10">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="w-11/12 bg-white p-6 rounded-lg m-auto leading-6">
                <p class="mb-6">Hey there Mamas!</p>
                <p>Welcome to OhBaby! A place where you can find your party supplies to make your baby parties memorable!
                    We believe background decor to the treats and favors should be spot on in celebration of your baby coming into the world.
                    Making your festivities easy, convenient and affordable to make happen.
                    Capturing beautiful moments of joy and excitement with the people you cherish most is something to be remembered and shared
                    with your arriving bundle of joy. So why not have great-themed Showers or Reveals?</p>
            </div>
            <div class="w-11/12 flex flex-wrap justify-center p-6 m-auto">
                <div class="about__img">
                    <img src="{{ URL::asset('img/main.jfif') }}" width="400">
                </div>
                <div class="w-6/12">
                    <h2 class="mb-6">Kimberly Palma,</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
