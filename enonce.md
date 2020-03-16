# Énoncé de l'exercice

#### Créer une API Etudiants qui donne accès à

```
students
{
    id: ID,
    name: String,
    firstname: String,
    birthdate: Date,
    major: String[],
    marks: Number[]
}
```

>major: Spécialité / Compétence d'intégrateur (comme sur linkedin)<br>
>marks: notes

```
blogs
{
    id: ID,
    student_id: ID (clé étrangère),
    title: String
}
```

```
articles {
    id: ID,
    blog_id: ID (clé étrangère),
    text: String,
    date: Date
}
```

```
comments {
    id: ID,
    article_id: ID (clé étrangère),
    text: String,
    likes: Number
}
```

Un étudiant ne peut avoir qu'un seul blog.<br>
Un blog peut avoir plusieurs articles.<br>
Un article peut avoir plusieurs commentaires

#### Méthodes

GET api/students : récupère tous les étudiants<br>
GET api/students/id : récupère l'étudiant avec l'ID sélectionné<br>
POST api/students : crée un nouvel étudiant. Id automatique.<br>
DELETE api/students: supprime un étudiant de la base. Sécuriser l'emploi de cette méthode.

GET api/blogs/id_student: récupère le blog correspondant à un étudiant<br>
POST api/blogs: crée un blog<br>
DELETE api/blogs/id: supprime un blog. Sécuriser l'emploi de cette méthode.<br>

GET api/articles: récupère tous les articles<br>
GET api/articles/id: récupère un article à l'id donné<br>
GET api/articles/id_blog: récupère les articles d'un blog donné.<br>
POST api/articles : crée un nouvel article

GET api/comments: récupère tous les commentaires<br>
GET api/comments/id: récupère le commentaire<br>
GET api/comments/id_article: récupère tous les commentaires liés à un article<br>
POST api/comments: crée un commentaire<br>
DELETE api/comments/id: supprime un commentaire. Sécuriser cette méthode.
