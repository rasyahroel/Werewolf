<!-- Case Selasa :
Kita akan memasuki dunia game werewolf.
	1. Pada saat akan bermain anda diminta memasukkan nama dan peran
	2. Untuk memulai game pemain harus memasukkan variable nama dan peran.
	3. Jika pemain tidak memasukkan nama maka game akan mengeluarkan warning “Nama harus diisi!“.
	4. Jika pemain memasukkan nama tapi tidak memasukkan peran maka game akan mengeluarkan warning “Pilih Peranmu untuk memulai game“.
	5. Terdapat tiga peran yaitu penyihir, guard, dan werewolf.
	6. Tugas anda adalah membuat program untuk mengecek input dari pemain dan hasil response dari game sesuai input yang dikirimkan. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Mini Quiz Selasa - Werewolf</title>
</head>

<body>
    <form method="post" action="">
        <div class="card mx-5 mt-5 col-5">
            <div class="card-body">
                <div class="mt-3">
                    <label class="form-label">Nama</label>
                    <input name="name" type="text" class="form-control" placeholder="Masukkan Nama Kamu" required>
                </div>

                <div class="mt-3">
                    <label class="form-label">Peran (Role)</label>
                    <select name="role" class="form-select" required>
                        <option selected disabled value="">Pilih role kamu disini</option>
                        <option value="Penyihir">Penyihir</option>
                        <option value="Guard">Guard</option>
                        <option value="Werewolf">Werewolf</option>
                    </select>
                </div>
                
                <div class="mt-3 col-12">
                    <button class="btn btn-primary" type="submit" name="submit">Daftar</button>
                </div>
            </div>

        <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $role = $_POST['role'];
        ?>

            <div class="mx-3 mt-3">
                <h4>Data Kamu</h4>
                <p>Nama     : <?= $name; ?></p>
                <p>Peran    : <?= $role; ?></p>
            </div>
        <?php
        }
        ?>

        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>