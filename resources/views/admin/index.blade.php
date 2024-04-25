
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Auth::User()->type == 1)
            <div class="card">
                <div class="card-header">All Subscribers</div>
                {{-- Guard Table --}}
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contacts</th>
                            <th scope="col">Pro Details</th>
                            <th scope="col">Subscription Options</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($Users as $User)
                          <tr>
                            <th scope="row">{{$User->id}}</th>
                            <td>{{$User->title}}. {{$User->fname}} {{$User->lname}}</td>
                            <td>{{$User->email}}<br>{{$User->phone}}<br>{{$User->country}}</td>
                            <td>
                                Job Function:
                                @if($User->other_Job_function == null)

                                @else
                                {{$User->Job_function}}
                                @endif

                                <br>
                                Organization: {{$User->organization}}

                                <br><hr>
                                @if($User->areas_of_interest == null)

                                @else
                                    Area of Interest:<br>
                                    <?php $Areas = json_decode($User->areas_of_interest,JSON_UNESCAPED_SLASHES);   ?>
                                        <?php echo implode(", ", $Areas);  ?>
                                        {{$User->other_areas_of_interest}}
                                @endif

                                <br>

                            </td>
                            <td>
                                @if($User->subscription_options == null)

                                @else
                                <?php $Subscription = json_decode($User->subscription_options,JSON_UNESCAPED_SLASHES);   ?>

                                <?php echo implode(", ", $Subscription);  ?>
                                @endif
                            </td>
                          </tr>
                          @endforeach


                        </tbody>
                    </table>


                  </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
