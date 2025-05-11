

<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: visitor.php");
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyRI Clinic</title>
  <link href="../style/output.css" rel="stylesheet" />
  <link href="../style/index.css" rel="stylesheet" />
  <link rel="icon" type="/favicon.svg" href="../../view/assets/icons/school-icon.svg">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="overflow-hidden flex items-center justify-center w-lvw h-dvh">
  <form
    action="../../Controller/login.php"
    method="POST"
    class="z-10 gap-5 p-6.5 flex flex-col justify-center shadow-[5px_5px_10px_rgba(0,0,0,0.1)] rounded-lg items-center">
    <section>
      <h1 class="text-center text-[40px] mb-[8px] krona">MyRi Clinic</h1>
      <h2 class="text-center mb-[30px] text-[20px] poppins">
        Rosario Institute Clinic
      </h2>
    </section>

    <input
      class="placeholder:poppins placeholder:textlg border-1 py-2.5 px-4.5 rounded-lg w-[100%]"
      type="text"
      name="username"
      placeholder="USERNAME"
      required />

    <input
      class="placeholder:poppins placeholder:textlg border-1 py-2.5 px-4.5 rounded-lg w-[100%]"
      type="password"
      name="password"
      placeholder="PASSWORD"
      required />
    <button
      action="submit"
      name="submit"
      class="poppins py-3.5 px-4.5 w-[80%] p-[8px] mt-3 rounded-lg bg-[#06118E] text-amber-50 hover:bg-[#2532CA] shadow-2xl duration-[0.1s] cursor-pointer">
      SIGN IN
    </button>

  </form>
  <img
    class="absolute h-[80rem] object-cover w-full"
    src="../public/ri-img.png "
    alt="" />
</body>
<script src="../script/login.js"></script>

</html>