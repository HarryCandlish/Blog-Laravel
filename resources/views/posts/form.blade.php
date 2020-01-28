<form method="POST" action="{{route('posts.store')}}">
@csrf
    <label >
    Author
    </label>
    <input class="input" type="text" value="author" name="author">
        <label 
          for="title" class="title">Title
        </label>
              <input class="input" type="text" value="title" name="title">
        <label 
              for="description" class="description">Description
        </label>
              <input class="input" type="text" value="description" name="description">
        <label 
                for="text" class="text">Text
        </label>
                <input class="input" type="text" value="text" name="text">
    <button type="submit">Submit</button>
</form>

<style>

* {
  box-sizing: border-box;
}

/**************************************/
@media (min-width: 700px) {
  .wrapper {
    overflow: hidden;
  }
  .wrapper > * {
    float: left;
    padding: 2em 2em;
  }
}

@media (min-width: 700px) {
  .contacts {
    width: 30%;
    min-height: 620px;
  }
}

@media (min-width: 700px) {
  .form {
    width: 70%;
  }
}

label {
    font-size: 25px;
}

form p {
  float: left;
  width: 49%;
}
form p:not(:nth-child(2n)) {
  margin-right: 2%;
}
form p:last-child {
  clear: both;
  width: 100%;
}
form p:nth-last-child(2) {
  clear: both;
  width: 100%;
}

/**************************************/
body {
  padding: 1rem;
}

.wrapper {
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
}
.wrapper > * {
  padding: 1em;
}

ul {
  list-style: none;
  padding: 0;
}

.contacts {
  background: #4b5195;
  color: #fff;
}

.form {
  background: #fff;
}

form label {
  display: block;
}

button,
input,
textarea {
  padding: 1em;
}

button {
  background: lightgrey;
  width: 100%;
  border: 0;
  position: relative;
  top: 50px;
}
button:hover, button:focus {
  background: gold;
  outline: 0;
}

.contain {
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}

input:focus,
textarea:focus {
  outline: 3px solid gold;
}

input,
textarea,
button {
  width: 100%;
  border: 1px solid #000;
}


</style>