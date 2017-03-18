<?php
/**
 * Created by PhpStorm.
 * User: servitpol
 * Date: 18.03.2017
 * Time: 19:17
 */
?>
@if (count($errors) > 0)
    <!-- Список ошибок формы -->
    <div class="alert alert-danger">
        <strong>Упс! Что-то пошло не так!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
