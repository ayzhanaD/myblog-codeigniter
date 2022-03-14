<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url();?>">MyBlog-CodeIgniter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link active" href="<?php echo base_url();?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>posts">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link active" href="<?php echo base_url();?>posts/create">Create Post</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">