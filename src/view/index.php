<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quanlymonhoc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH S??CH QU???N L?? TH??NG TIN M??N H???C</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">M?? m??n h???c</th>
                    <th scope="col">T??n m??n h???c</th>
                    <th scope="col">S??? t??n ch???</th>
                    <th scope="col">S??? ti???t l?? thuy???t</th>
                    <th scope="col">S??? ti???t b??i t???p</th>
                    <th scope="col">S??? ti???t th???c h??nh-th?? nghi???m</th>
                    <th scope="col">S??? gi??? t??? h???c</th>
                </tr>
            </thead>
            <tbody>
                <!-- V??ng n??y l?? D??? li???u c???n l???p l???i hi???n th??? t??? CSDL -->
                <?php
                    // B?????c 01: K???t n???i Database Server
                    $conn = mysqli_connect('localhost','root','','quanlydaihoc');
                    if(!$conn){
                        die("K???t n???i th???t b???i. Vui l??ng ki???m tra l???i c??c th??ng tin m??y ch???");
                    }
                    // B?????c 02: Th???c hi???n truy v???n
                    $sql = "SELECT * FROM monhoc";
                    $result = mysqli_query($conn,$sql);
                    // B?????c 03: X??? l?? k???t qu??? truy v???n
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['mamh']; ?></th>
                                <td><?php echo $row['ten_mh']; ?></td>
                                <td><?php echo $row['sotinchi']; ?></td>
                                <td><?php echo $row['sotiet_Lt']; ?></td>
                                <td><?php echo $row['sotiet_Bt']; ?></td>
                                <td><?php echo $row['sotiet_thtn']; ?></td>
                                <td><?php echo $row['sogio_tuhoc']; ?></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
                
            </tbody>
            </table>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>