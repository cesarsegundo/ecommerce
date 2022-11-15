<x-site-layout>
    <form action="mail.php" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Mensaje</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button>Enviar</button>
    </form>
</x-site-layout>