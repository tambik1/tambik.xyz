@extends('layouts.app')
@section('content')
    <div class="teams_container">
        <div class="teams_create_btn_container">
            <button class="uk-button uk-button-secondary" uk-toggle="target: #modal-create-team" type="button" style="border-radius: 5px">Создать команду</button>
        </div>

        <div id="modal-create-team" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Введите название команды</h2>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Название команды">
                </div>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Отмена</button>
                    <button class="uk-button uk-button-primary" type="button">Создать</button>
                </p>
            </div>
        </div>

        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>


        <div id="modal-delete-team" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Вы дейстительно хотите удалить команду: "$name"?</h2>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Отмена</button>
                    <button class="uk-button uk-button-danger" type="button">Удалить</button>
                </p>
            </div>
        </div>

        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>
        <div class="teams_card_container">
            <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-card-body" style="border-radius: 20px; display: flex; flex-direction: column">
                <h3 class="uk-card-title" style="width: 180px; overflow: hidden; text-overflow: ellipsis;">Название командыssssssssssssssssssssssssssssss</h3>
                <button class="uk-button-small uk-button-primary" type="button" uk-toggle="target: #modal-delete-team" style="border-radius: 20px">Удалить команду</button>
            </div>
        </div>

        </div>
@endsection

