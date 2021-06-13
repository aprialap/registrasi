 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <link href="{{asset('surface/assets/css/aps.css')}}" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">


 <style>



body{
    font-size:12px
}

.form-control{
    font-size:12px
}

     .date {
    position: relative;
    width: 100%; height: 33px;
    /* color: white; */
}

.date:before {
    position: absolute;
    top: 6px; left: 10px;
    content: attr(data-date);
    display: inline-block;
    color: black;
}

.date::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
    display: none;
}

.date::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 6px;
    right: 10px;
    color: black;
    opacity: 1;
}
 </style>