<?php 

    require "data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emelle Jung</title>
   
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
    <main>
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ancreIntro">Hello</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ancreBio">Who I am</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#ancreWork">What I do</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#ancreContact">Say hi</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <div id="overlay"></div>
            <div id="container-header">  
                <div id="description">
                    <h1>Marie Laure JUNG</h1>
                    <h2>Debitis, cupiditate?</h2>
                </div>
            </div>  
        </header>
      
        <section  class="blue-background" id="intro">
            
            <h3 id="ancreintro" class="blue-background">Intro</h3>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, commodi? Dolores, optio? Quam ab assumenda magni eius voluptas cupiditate excepturi.</p>
                        <aside><p class="text-intro">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, cum.</p></aside>
                        <p class="text-intro">Explicabo dignissimos natus a necessitatibus iste voluptates aliquam blanditiis, perferendis aliquid at ipsum nostrum inventore sint consectetur commodi et? Unde, excepturi nemo. Voluptates et necessitatibus perferendis ipsum, eos, molestias eligendi repellendus quasi similique aspernatur corrupti. Quos, numquam velit? Maxime voluptates, alias, autem neque vel molestias id laborum ipsa sit asperiores consequatur, vitae consequuntur!</p>
                        <nav aria-label="Articles pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">See my work</a></li>
                                <li class="page-item"><a class="page-link" href="#">Contact me</a></li>
                            </ul>
                        </nav>
                     </div>
                </div>
            </div>       
        </section>
        <section>
         
                <h3 id="ancreBio" class="white-background">Bio</h3>
         
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img width="100%" src="images/looking.jpg" alt="looking" />
                        <div class="text-bio"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iure odit aliquam iusto, blanditiis perferendis voluptatum recusandae nesciunt fugiat maiores impedit deleniti delectus ipsum dolor ratione quidem minus fugit beatae maxime corrupti modi ut. Mollitia laborum corporis molestiae neque eum.</p>
                        </div>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Développement</th>
                                        <th scope="col" colspan="2">Technique</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="legends">
                                        <th scope="col">Language</th>
                                        <th scope="col">Note</th>
                                        <th scope="col">Environnement</th>
                                        <th scope="col">Note</th>
                                    </tr>
                                    <tr>
                                        <td class="column-border">HTML</td>
                                        <td class="column-border"></td>
                                        <td class="column-border">Linux</td>
                                        <td class="column-border"></td>
                                    </tr>
                                    <tr>
                                        <td class="column-border">CSS</td>
                                        <td class="column-border"></td>
                                        <td class="column-border">MacOs</td>
                                        <td class="column-border"></td>
                                    </tr>
                                    <tr>
                                        <td class="column-border">PHP</td>
                                        <td class="column-border"></td>
                                        <td class="column-border">Windows</td>
                                        <td class="column-border"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="grey-background">
            <h3 id="ancreWork" class="grey-background">Work</h3>
            <article>         
                <div class="container">
                    <div class="row">
                        <?php foreach($workPosts as $post): ?>
                            <div class="col-md-4">
                                <div class="articles">
                                    <img src="images/<?= $post["picture"]; ?>" alt="<?=$post["title"]; ?>"/>
                                    <h4><?=$post["title"]; ?></h4>
                                    <p class="text-article"><?= substr($post["summary"], 0, 120) . "..."; ?></p>
                                    <div class="readmore" >
                                        <a class="buttonhover" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        </section>
        <section class="dark-grey-background">
            
            <h3 id="ancreContact" class="white-background">Contact</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form>
                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                        Human
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                        Not sure
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
                                        <label class="form-check-label" for="gridRadios3">
                                        Robot
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="inputSubject" class="col-sm-12 col-form-label">Subject</label>
                                <div class="col-sm-12">
                                <select type="subject" class="form-control" id="inputSubject">
                                    <option selected>Work</option>
                                    <option selected>Other</option>
                                    <option selected>And other...</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputNickname" class="col-sm-12 col-form-label">Nickname</label>
                                <div class="col-sm-12">
                                <input type="nickname" class="form-control" id="inputNickname" placeholder="Nickname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-12 col-form-label">Email address</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Your email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputMessage" class="col-sm-12 col-form-label">Message</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="inputMessage" placeholder="Your message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">reset</button>
                                <button type="submit" class="btn btn-primary">Send this message!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="address" class="col-md-5">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a voluptate praesentium tenetur, deleniti numquam magni aut blanditiis id reiciendis, perspiciatis vel, alias error repellendus nesciunt. Atque ipsum dolore facere architecto nihil. Et voluptatum enim nam hic odio fugit perferendis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>JUNGY © Copyright.... </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>