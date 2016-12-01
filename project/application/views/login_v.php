<!DOCTYPE html>
<html>
<head>
<title><?= $title ?></title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<section id="login">
	<div class="col-md-4 col-md-offset-4">
		<div class="login-title">
			<h1>LOGIN</h1>
		</div>
		<div class="login-form" align="center">
			<?php if ($this->session->flashdata('message')): ?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('message'); ?>
				</div>
			<?php endif ?>
			<?= form_open('auth'); ?>
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<button type="submit" name="submit" value="submit">Login</button>
			</form>
			<a href="#">Forgot password?</a>
		</div>
		<div class="divider"></div>
		<div class="footer">
			<h2><span class="fa fa-paw"></span> Buku Induk Siswa</h2>
			<h4>SMP Tahfidzu</h4>
			<p>&copy;Copyright All Right Reserved.</p>
			<p>Developed by Fadhel Muhammad Gintings on Godspeed Digital.</p>
		</div>
	</div>
</section>

<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="https://use.fontawesome.com/6378789491.js"></script>
</body>
</html>