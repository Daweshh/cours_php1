function testNum(a) {
  let result;
  if (a > 0) {
    result = "positive";
  } else {
    result = "NOT positive";
  }
  return result;
}

function testNum2(a) {
  // on définit la variable result2, "let nom_de_la_variable"
  let result2;
  // result2 = 5
  // on va rappeler la variable result2, "nom_de_la_variable =" 
  // FONCTIONNEMENT D'UNE TERNAIRE :
  // variable = condition_a_verifier ? action_si_condition_1_verifiee : action_si_condition_2_verifiee
  result2 = a>0 ? "positive" : "NOTpositive"
  // result2 = a>0 ?? null
  return result2;
}