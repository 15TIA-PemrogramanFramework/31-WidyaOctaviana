<form method="post">
	<p>username : <input type="text" name="username"></p>
	<p>password : <input type="password" name="password"></p>
	<p><input type="submit" name="login"></p>
	<p><?php echo $this->session->flashdata('gagal'); ?></p>
</form>