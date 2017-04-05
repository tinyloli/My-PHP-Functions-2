<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makePizza($type) {
  if ($type == 'pizza') {
    $valid = true;
    $description = 'It&rsquo;s a savory pie that gives people happiness.';
  } else if ($type == 'cheese pizza') {
    $valid = true;
    $description = 'A cheese pizza has no toppings other than the marinara sauce and cheese.';
  } else if ($type == 'hawaiian pizza') {
    $valid = true;
    $description = 'A hawaiian pizza is basically a cheese pizza with ham and pineapples.';
  } else if ($type == 'vegetarian pizza') {
    $valid = true;
    $description = 'A vegetarian pizza is basically a cheese pizza with bell peppers, olives, and mushrooms.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Gross!</strong> Enter something good next time.</p>
      </div>
    ');
  }
}
