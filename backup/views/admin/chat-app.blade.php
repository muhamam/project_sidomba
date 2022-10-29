@extends('layouts.admin')

@section('content')
<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        @include('layouts.navbarAdmin')


<div class="messaging">
      <div class="inbox_msg row">
        <div class="col-md-4">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            @foreach ($users as $item)
            @forelse ($item as $user)
            <div class="chat_list userchat" id="{{ $user->id }}">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>{{ $user->name }} <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            @empty
                <p class="text-center mt-5">to start a conversation please click the add icon</p>
                <a class="btn btn-success rounded-circle p-2" href="{{ route('admin.total-user') }}"><i class="fa-solid fa-plus"></i></a>
                
            @endforelse
            @endforeach
            
           
          </div>
        </div>
        <div class="col-md-8" id="messages">
          
        </div>
      </div>
      
    </div>
@endsection