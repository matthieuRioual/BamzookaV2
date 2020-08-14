<?php $title = 'Acceuil'; ?>

<?php ob_start(); ?>

<section class="homecontent">
    <div class="text-white cyan darken-3 text-center mx-auto" id ="top-content">
        <h1 class="pt-5 mx-5 display-3">Automate your workflow with reusable checklists</h1>
        <h2 class="px-5">
        Create checklists, schedule them, assign them to your team, watch progress in real-time.
        </h2>
        <form class="form-inline py-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <button type="submit" class="btn btn-outline-dark btn-rounded waves-effects">Try for free</button>
        </form>
        
    </div>


    <div class="container" id="middle-content">
        <!-- Grid row-->
        <div class="specification row my-5" style="text-align:center;">

        <!-- Grid column -->
            <div class="col-sm-12 col-md-4 col-12">
            <i class="far fa-window-restore fa-6x"></i>
            <h4 class="mt-3">Checklist Templates</h4>
            <p class="paragraph mt-10px text_justify">
            Document processes with checklist templates. They can be cloned and reused
            </p>
            </div>
            <div class="col-sm-6 col-md-4 col-12">
            <i class="fas fa-cogs fa-6x"></i>
            <h4 class="mt-3">Checklist Templates</h4>
            <p class="paragraph mt-10px text_justify">
            Document processes with checklist templates. They can be cloned and reused
            </p>
            </div>
            <div class="col-sm-6 col-md-4 col-12s">
            <i class="fas fa-globe-americas fa-6x"></i>
            <h4 class="mt-3">Checklist Templates</h4>
            <p class="paragraph mt-10px text_justify">
            Document processes with checklist templates. They can be cloned and reused
            </p>
            </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row-->


    </div>

    <div class="p-3 purple darken-2 text-white" id="bottom-content">
    <blockquote class="blockquote text-justify" style="{font-size:1.2em}">
    <p class="mb-0">"Bamzooka helps manage processes and standard operating procedures (SOP) in a simple and centralized way. It solves quality, consistency, reliability and turn-over challenges many organizations face so that the work is done on time with predictable quality. It is a huge productivity gain for any team, department, and organization of any size."</p>
    <footer class="footer"> -- Daniel, founder @<cite title="Source Title">Bamzooka</cite></footer>
    </blockquote>
    </div>
</section>
<?php $content = ob_get_clean(); require 'template.php'; ?>