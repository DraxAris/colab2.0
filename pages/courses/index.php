<?php
    include '../../modules/head/head.php';
?>
<title>Courses | Colab</title>
<link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
<body>
    <h1>Add a course</h1>
    <div>
        <form>
        <div class="form-group">
        <label for="exampleFormControlInput1">Course name:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="My course name">
        </div>
        <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                    </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">User acces:</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                    </select>
        </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course info:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    </form>
    </div>
</body>