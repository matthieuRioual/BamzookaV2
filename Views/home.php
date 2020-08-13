<?php $title = 'Acceuil'; ?>

<?php ob_start(); ?>

<div class="text-white cyan darken-3 text-center content mx-auto">
    <h1 class="pt-5 mb-3 display-3">Automate your workflow with reusable checklists</h1>
    <h2 class="pb-1">
    Create checklists, schedule them, assign them to your team, watch progress in real-time.
    </h2>
    <form class="form-inline pb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <button type="submit" class="btn btn-outline-dark btn-rounded waves-effects">Try for free</button>
    </form>
    
</div>


<div>



</div>

<div class="p-3">
<blockquote class="blockquote text-justify">
  <p class="mb-0">"Bamzooka helps manage processes and standard operating procedures (SOP) in a simple and centralized way. It solves quality, consistency, reliability and turn-over challenges many organizations face so that the work is done on time with predictable quality. It is a huge productivity gain for any team, department, and organization of any size."</p>
  <footer class="blockquote-footer"> Daniel, founder @<cite title="Source Title">Bamzooka</cite></footer>
</blockquote>
</>
<?php $content = ob_get_clean(); require 'template.php'; ?>