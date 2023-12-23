<!Doctype html>
<html>
<head>
<title>tasks</title>
<meta charset="UTF-8" />
</head>
<body>
<h2>Liste des Tâches</h2>

<ul>
    @foreach($tasks as $task)
        <li>  nom de tache - {{ $task->nom_tache }} </li>
        <li>  createur de tache - {{ $task->creator }} </li>
        <li>  email createur de tache - {{ $task->creator_email }} </li>
        <li>  phone createur de tache - {{ $task->phone_creator }} </li>
        <hr>
    @endforeach
</ul>


</ul>

</body>
</html>

