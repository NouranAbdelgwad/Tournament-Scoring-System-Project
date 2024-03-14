@extends('layout.layout')
@section('title', 'Teams Rank')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex bg-light places m-3">
                <img src="https://images.emojiterra.com/google/android-12l/512px/1f947.png" class="emojies" alt="">
                <h6><b>1st place</b></h6>
            </div>
            <div class="col-4 d-flex bg-light places m-3">
                <img src="https://www.emojiall.com/images/240/google/1f948.png" class="emojies" alt="">
                <h6><b>2nd place</b></h6>
            </div>
            <div class="col-4 d-flex bg-light places m-3">
                <img src="https://images.emojiterra.com/google/android-12l/512px/1f949.png" class="emojies" alt="">
                <h6><b>3rd place</b></h6>
            </div>
        </div>
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/teams_rank">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/individuals_rank">Individuals</a>
            </li>
        </ul>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>Rank</th>
                <th>Team</th>
                <th>Reward</th>
                <th>Points</th>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2"><span class="d-flex justify-content-between"><b>1</b> <img src="https://images.emojiterra.com/google/android-12l/512px/1f947.png" class="emojies" alt=""></span></td>
                    <td>Khaled Wahied</td>
                    <td>200 $</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td class="p-2"><span class="d-flex justify-content-between"><b>2</b> <img src="https://www.emojiall.com/images/240/google/1f948.png" class="emojies" alt=""></span></td>
                    <td>Youmna Anwar</td>
                    <td>100 $</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td class="p-2"><span class="d-flex justify-content-between"><b>3</b> <img src="https://images.emojiterra.com/google/android-12l/512px/1f949.png" class="emojies" alt=""></span></td>
                    <td>Gamela Razek</td>
                    <td>50 $</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td class="p-2"><span class="d-flex justify-content-between"><b>4</b></span></td>
                    <td>Saffy Adbullah</td>
                    <td>0 $</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td class="p-2"><span class="d-flex justify-content-between"><b>5</b></span></td>
                    <td>Hossam</td>
                    <td>0 $</td>
                    <td>50</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
