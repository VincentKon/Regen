<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnOn | SignUp</title>
    <link rel="stylesheet" href="css/regis.css">
</head>

<body>
    <div id="content">
        <div class="kotak_form">
            <h2 id="title">Sign Up</h2>

            <span></span>
            <form action="/signup" method="POST" id="form">
                @csrf
                <div class="name">
                    <input type="text" name="first_name" id="first_name" placeholder=" First Name"
                        class="@error('first_name') is-invalid @enderror" required value="{{ old('first_name') }}">
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input type="text" name="last_name" id="last_name" placeholder=" Last Name"
                        class="@error('last_name') is-invalid @enderror" required value="{{ old('last_name') }}">
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <input type="email" name="email" id="email" placeholder=" Email ('@gmail.com')"
                    class=" @error('username') is-invalid @enderror" required value="{{ old('email') }}">
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <input type="password" name="password" id="password" placeholder=" Password"
                    class="@error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <input type="password" name="con_pass" id="con_pass" placeholder=" Confirm Password">
                <input type="text" name="username" id="username" placeholder=" Username"
                    class="@error('username') is-invalid @enderror" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <input type="text" name="place" id="place" placeholder=" Place Of Birth"
                    class="@error('place') is-invalid @enderror" required value="{{ old('place') }}">
                @error('place')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="date" class="dateSubTittle">Date of birth</label>
                <div class="date_of_birth">
                    <select name="date" id="date" class="@error('date') is-invalid @enderror" required
                        value="{{ old('date') }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <!--Ini month-->
                    <select name="month" id="month" class="@error('month') is-invalid @enderror" required
                        value="{{ old('month') }}">
                        @error('month')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <!--Ini year-->
                    <select name="year" id="year" class="@error('year') is-invalid @enderror" required
                        value="{{ old('year') }}">
                        @error('year')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>

                <div class="bawah">
                    <input type="tel" name="hp" id="hp" placeholder=" Phone Number"
                        class="@error('hp') is-invalid @enderror" required value="{{ old('hp') }}">
                    @error('hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <select name="gender" id="gender" placeholder="Gender"
                        class="@error('gender') is-invalid @enderror" required value="{{ old('gender') }}">
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <input type="submit" value="Sign Up" id="btn">

            </form>
        </div>

    </div>


</body>

</html>
