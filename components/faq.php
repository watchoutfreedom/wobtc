
<div class="wrapper">  
  <div class="container_box">
<?php 
    $rows = get_field('faq');

    if( $rows ) {
        echo '';
        foreach( $rows as $row ) {
            $pregunta = $row['pregunta'];
            $respuesta = $row['respuesta']; 
            echo '<div class="container_box">';
                if( !empty($hora) ) {
                    echo '<div class="question">' . esc_html( $pregunta ) . '</div>';
                }
                if( !empty($titulo) ) {
                  echo '<div class="answercont"><div class="answer">' . esc_html( $respuesta ) . '</div></div>'; 
                }
            echo '</div>';
        }
        echo '';
    }
    ?>
</div>


<script>
  let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})
</script>