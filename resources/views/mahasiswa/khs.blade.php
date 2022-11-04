@extends('mahasiswa/layouts/main')

@section('container')
<div class="page-wrapper">
    <div class="content container-fluid">
      <div class="page-header mt-5">
        <div class="row">
          <div class="col">
            <h3 class="page-title">KHS</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/mahasiswa">home</a></li>
              <li class="breadcrumb-item active">KHS</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content profile-tab-cont">
            <div class="tab-pane fade show active">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-between">
                    <span>KHS Details</span>
                    <a class="edit-link" href="/edit-khs/{{ $khs->id }}"><i class="fa fa-edit mr-1"></i>Edit</a>
                  </h5>
                  <div class="row mt-5">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Active Semester</p>
                    <p class="col-sm-9">{{$khs->semester}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">SKS Semester</p>
                    <p class="col-sm-9">{{$khs->sks_smt}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">SKS Kumulatif</p>
                    <p class="col-sm-9">{{$khs->sks_total}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">IP Semester</p>
                    <p class="col-sm-9">{{$khs->ips}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">IP Kumulatif</p>
                    <p class="col-sm-9">{{$khs->ipk}}</p>
                  </div>
                  <div class="row">
                    <p class="col-sm-2 text-sm-right mb-0 mb-sm-2">Attachment</p>
                    <a href="storage/khs/{{$khs->file_khs}}" target="_blank" class="col-sm-9">Check here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
        

    
    
    