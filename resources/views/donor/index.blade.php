@extends("layouts.app")

@section("content")
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="hammahamma">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="hammahamma">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $email }}" disabled>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" placeholder="27">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city">
                    <option>select ...</option>
                    <option value="Tunis">Tunis</option>
                    <option value="Ariana">Ariana</option>
                    <option value="Ben Arous">Ben Arous</option>
                    <option value="Manouba">Manouba</option>
                    <option value="Nabeul">Nabeul</option>
                    <option value="Zaghouan">Zaghouan</option>
                    <option value="Bizerte">Bizerte</option>
                    <option value="Béja">Béja</option>
                    <option value="Kef">Kef</option>
                    <option value="Siliana">Siliana</option>
                    <option value="Sousse">Sousse</option>
                    <option value="Monastir">Monastir</option>
                    <option value="Mahdia">Mahdia</option>
                    <option value="Sfax">Sfax</option>
                    <option value="Kairouan">Kairouan</option>
                    <option value="Kasserine">Kasserine</option>
                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                    <option value="Gabès">Gabès</option>
                    <option value="Mednine">Mednine</option>
                    <option value="Tataouine">Tataouine</option>
                    <option value="Gafsa">Gafsa</option>
                    <option value="Tozeur">Tozeur</option>
                    <option value="Kebili">Kebili</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="number" class="form-control" id="mobile" placeholder="27888888">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender">
                    <option>select ...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Blood Type</label>
                <select class="form-control" id="gender">
                    <option>select ...</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="O+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                </select>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <textarea class="form-control" id="adresse" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection
