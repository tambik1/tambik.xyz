@if($errors->any())
    <div class="uk-alert-danger" uk-alert style="margin: 0">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <a class="uk-alert-close" uk-close></a>
    </div>
@endif

@if(session('success'))
    <div class="uk-alert-success" uk-alert style="margin: 0">
        <p style="margin-left: 10px">{{session('success')}}</p>
        <a class="uk-alert-close" uk-close ></a>
    </div>
@endif
@if(session('redirect'))
    <div class="uk-alert-success" uk-alert style="margin: 0">
        <p style="margin-left: 10px">{{session('redirect')}}</p>
        <a class="uk-alert-close" uk-close ></a>
    </div>
@endif
@if(session('noAccess'))
    <div class="uk-alert-danger" uk-alert style="margin: 0">
        <p style="margin-left: 10px">{{session('noAccess')}}</p>
        <a class="uk-alert-close" uk-close ></a>
    </div>
@endif
