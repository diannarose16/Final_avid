<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>

</head>
<body>
    
    <h1>Wellness and Health Survey</h1>
    <form method="POST" action="submit_surveyy.php" onsubmit="return validateForm()">
        <!-- General Health Section -->
        <h2>General Health</h2>
        <label>1. Which health goals are you focusing on?</label><br>
        <select name="responses[1]" required>
            <option value="Energy">Energy</option>
            <option value="Weight Management">Weight Management</option>
            <option value="Immunity">Immunity</option>
            <option value="Stress">Stress</option>
            <option value="General Well-being">General Well-being</option>
        </select><br><br>

        <label>2. Which wellness areas would you like to improve? (Select all that apply)</label><br>
        <input type="radio" name="responses[2][]" value="Nutrition" required> Nutrition<br>
        <input type="radio" name="responses[2][]" value="Fitness" required> Fitness<br>
        <input type="radio" name="responses[2][]" value="Mental Health" required> Mental Health<br>
        <input type="radio" name="responses[2][]" value="Sleep" required> Sleep<br>
        <input type="radio" name="responses[2][]" value="Stress Management" required> Stress Management<br><br>

        <!-- Supplements Section -->
        <h2>Supplements</h2>
        <label>1. Do you currently take vitamins or supplements?</label><br>
        <input type="radio" name="responses[3]" value="Yes" required> Yes<br>
        <input type="radio" name="responses[3]" value="No" required> No<br><br>

        <label>2. What benefits do you seek from them? (Select all that apply)</label><br>
        <input type="radio" name="responses[4][]" value="Immunity" required> Immunity<br>
        <input type="radio" name="responses[4][]" value="Energy" required> Energy<br>
        <input type="radio" name="responses[4][]" value="Stress Relief" required> Stress Relief<br>
        <input type="radio" name="responses[4][]" value="Joint Health" required> Joint Health<br>
        <input type="radio" name="responses[4][]" value="Cognitive Support" required> Cognitive Support<br><br>

        <label>3. Do you prefer specific supplement types?</label><br>
        <select name="responses[5]" required>
            <option value="Organic">Organic</option>
            <option value="Whole-food">Whole-food</option>
            <option value="Vegan">Vegan</option>
            <option value="Non-GMO">Non-GMO</option>
            <option value="Sustainable">Sustainable</option>
            <option value="No Preference">No Preference</option>
        </select><br><br>

         <!-- Vitamins Section -->
         <h2>Vitamins</h2>
         <label>1. Preferred supplement format:</label><br>
         <input type="radio" name="responses[6]" value="Gummies" required> Gummies<br>
         <input type="radio" name="responses[6]" value="Pills" required> Pills<br>
         <input type="radio" name="responses[6]" value="Powder" required> Powder<br>
         <input type="radio" name="responses[6]" value="Capsules" required> Capsules<br>
         <input type="radio" name="responses[6]" value="Others" required> Others<br><br>
 
         <label>2. Any dietary restrictions? (Select all that apply)</label><br>
         <input type="radio" name="responses[7][]" value="Sugar-free" required> Sugar-free<br>
         <input type="radio" name="responses[7][]" value="Gluten-free" required> Gluten-free<br>
         <input type="radio" name="responses[7][]" value="Keto" required> Keto<br>
         <input type="radio" name="responses[7][]" value="Dairy-free" required> Dairy-free<br>
         <input type="radio" name="responses[7][]" value="None" required> None<br><br>
 
         <label>3. How important is a multivitamin with minerals?</label><br>
         <select name="responses[8]">
             <option value="Not Important">Not Important</option>
             <option value="Somewhat Important">Somewhat Important</option>
             <option value="Very Important">Very Important</option>
         </select><br><br>
         
        <!--Fitness Section-->
        <h2>Fitness</h2>
        <label>1. How often do you exercise?</label><br>
        <select name="responses[9]" required>
            <option value="Daily">Daily</option>
            <option value="3-5 times/week">3-5 times/week</option>
            <option value="1-2 times/week">1-2 times/week</option>
            <option value="Rarely">Rarely</option>
            <option value="Never">Never</option>
        </select><br><br>

        <label>2. Preferred activity types</label><br>
        <input type="radio" name="responses[10][]" value="Cardio" required> Cardio<br>
        <input type="radio" name="responses[10][]" value="Weightlifting" required> Weightlifting<br>
        <input type="radio" name="responses[10][]" value="Yoga" required> Yoga<br>
        <input type="radio" name="responses[10][]" value="Outdoors" required> Outdoors<br>
        <input type="radio" name="responses[10][]" value="No Preference" required> No Preference<br><br>

        <!--Mental Wellness Section-->
        <h2>Mental Wellness</h2>
        <label>1. Do you practice meditation or mindfulness?</label><br>
        <select name="responses[11]" required>
            <option value="Daily">Daily</option>
            <option value="Occasionally">Occasionally</option>
            <option value="Interested">Interested</option>
            <option value="Not Interested">Not Interested</option>
        </select><br><br>

        <label>2. Desired benefits from mental wellness practices?</label><br>
        <input type="radio" name="responses[12][]" value="Anxiety relief" required> Anxiety relief<br>
        <input type="radio" name="responses[12][]" value="Focus" required> Focus<br>
        <input type="radio" name="responses[12][]" value="Sleep" required> Sleep<br>
        <input type="radio" name="responses[12][]" value="General Relaxation" required> General Relaxation<br><br>
        
        <!--Wellness Tech Section-->
        <h2>Wellness Tech</h2>
        <label>1. Interested in wellness tech for mental health?</label><br>
        <input type="radio" name="responses[13]" value="Yes" required> Yes<br>
        <input type="radio" name="responses[13]" value="No" required> No<br><br>

        <label>2. Key metrics you prioritize?</label><br>
        <select name="responses[14]" required>
            <option value="Heart rate">Heart rate</option>
            <option value="Steps">Steps</option>
            <option value="Sleep">Sleep</option>
            <option value="Activity">Activity</option>
            <option value="Stress">Stress</option>
        </select><br><br> 

        <label>3. How important is sleep tracking</label><br>
        <select name="responses[15]" required>
            <option value="Not Important">Not Important</option>
            <option value="Somewhat Important">Somewhat Important</option>
            <option value="Very Important">Very Important</option>
        </select><br><br>

        <!--Personal Care Section-->
        <h2>Personal Care</h2>
        <label>1. Primary skin care concerns? Select all that apply</label><br>
        <input type="radio" name="responses[16][]" value="Dryness" required> Dryness<br>
        <input type="radio" name="responses[16][]" value="Aging" required> Aging<br>
        <input type="radio" name="responses[16][]" value="Acne" required> Acne<br>
        <input type="radio" name="responses[16][]" value="Sensitivity" required> Sensitivity<br>
        <input type="radio" name="responses[16][]" value="Dark spots" required> Dark spots<br>
        <input type="radio" name="responses[16][]" value="Redness" required> Redness<br>
        <input type="radio" name="responses[16][]" value="None" required> None<br><br>

        <label>2. Any specific skin type or conditions?</label><br>
        <input type="radio" name="responses[17][]" value="Oily"required> Oily<br>
        <input type="radio" name="responses[17][]" value="Dry"required> Dry<br>
        <input type="radio" name="responses[17][]" value="Combination"required> Combination<br>
        <input type="radio" name="responses[17][]" value="Eczema"required> Eczema<br>
        <input type="radio" name="responses[17][]" value="Rosacea"required> Rosacea<br>
        <input type="radio" name="responses[17][]" value="None"required> None<br><br>

        <label>3. Preferred personal care formulations??</label><br>
        <input type="radio" name="responses[18][]" value="Natural"required> Natural<br>
        <input type="radio" name="responses[18][]" value="Dermatologically tested"required> Dermatologically tested<br>
        <input type="radio" name="responses[18][]" value="Fragrance-free"required> Fragrance-free<br>
        <input type="radio" name="responses[18][]" value="No preference"required> No preference<br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
