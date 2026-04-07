<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <style>
        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .button {
            padding: 10px 20px;
            border: 2px solid #007BFF;
            background-color: #fff;
            color: #007BFF;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button.selected {
            background-color: #007BFF;
            color: #fff;
        }
        button[type="submit"]:disabled {
            background-color: #ccc;
            color: #333;
            cursor: not-allowed;
        }
    </style>
    </script>
</head>
<body>
    <h1>Wellness and Health Survey</h1>
    <form method="POST" action="submit_surveyy.php">
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
        <div class="button-group" data-group="responses[2]">
            <button type="button" class="button">Nutrition</button>
            <button type="button" class="button">Fitness</button>
            <button type="button" class="button">Mental Health</button>
            <button type="button" class="button">Sleep</button>
            <button type="button" class="button">Stress Management</button>
            <button type="button" class="button">None</button>
        </div><br><br>

        <!-- Supplements Section -->
        <h2>Supplements</h2>
        <label>1. Do you currently take vitamins or supplements?</label><br>
        <input type="radio" name="responses[3]" value="Yes"> Yes<br>
        <input type="radio" name="responses[3]" value="No"> No<br><br>

        <label>2. What benefits do you seek from them? (Select all that apply)</label><br>
        <div class="button-group" data-group="responses[4]">
            <button type="button" class="button">Immunity</button>
            <button type="button" class="button">Energy</button>
            <button type="button" class="button">Stress Relief</button>
            <button type="button" class="button">Joint Health</button>
            <button type="button" class="button">Cognitive Support</button>
            <button type="button" class="button">None</button>
        </div><br><br>

        <label>3. Do you prefer specific supplement types?</label><br>
        <select name="responses[5]">
            <option value="Organic">Organic</option>
            <option value="Whole-food">Whole-food</option>
            <option value="Vegan">Vegan</option>
            <option value="Non-GMO">Non-GMO</option>
            <option value="Sustainable">Sustainable</option>
            <option value="No Preference">No Preference</option>
        </select><br><br>

        <!-- Fitness Section -->
        <h2>Fitness</h2>
        <label>1. How often do you exercise?</label><br>
        <select name="responses[9]">
            <option value="Daily">Daily</option>
            <option value="3-5 times/week">3-5 times/week</option>
            <option value="1-2 times/week">1-2 times/week</option>
            <option value="Rarely">Rarely</option>
            <option value="Never">Never</option>
        </select><br><br>

        <label>2. Preferred activity types</label><br>
        <div class="button-group" data-group="responses[10]">
            <button type="button" class="button">Cardio</button>
            <button type="button" class="button">Weightlifting</button>
            <button type="button" class="button">Yoga</button>
            <button type="button" class="button">Outdoors</button>
            <button type="button" class="button">No Preference</button>
        </div><br><br>

        <!-- Mental Wellness Section -->
        <h2>Mental Wellness</h2>
        <label>1. Do you practice meditation or mindfulness?</label><br>
        <select name="responses[11]">
            <option value="Daily">Daily</option>
            <option value="Occasionally">Occasionally</option>
            <option value="Interested">Interested</option>
            <option value="Not Interested">Not Interested</option>
        </select><br><br>

        <label>2. Desired benefits from mental wellness practices?</label><br>
        <div class="button-group" data-group="responses[12]">
            <button type="button" class="button">Anxiety relief</button>
            <button type="button" class="button">Focus</button>
            <button type="button" class="button">Sleep</button>
            <button type="button" class="button">General Relaxation</button>
            <button type="button" class="button">None</button>
        </div><br><br>

        <!-- Wellness Tech Section -->
        <h2>Wellness Tech</h2>
        <label>1. Interested in wellness tech for mental health?</label><br>
        <input type="radio" name="responses[13]" value="Yes"> Yes<br>
        <input type="radio" name="responses[13]" value="No"> No<br><br>

        <label>2. Preferences for wellness apps and tech? (Select all that apply)</label><br>
        <div class="button-group" data-group="responses[14]">
            <button type="button" class="button">Fitness Tracking</button>
            <button type="button" class="button">Nutrition Monitoring</button>
            <button type="button" class="button">Sleep Tracking</button>
            <button type="button" class="button">Stress Management</button>
            <button type="button" class="button">No Preference</button>
        </div><br><br>

        <!-- Personal Care Section -->
        <h2>Personal Care</h2>
        <label>1. Which personal care products do you prioritize?</label><br>
        <div class="button-group" data-group="responses[15]">
            <button type="button" class="button">Skincare</button>
            <button type="button" class="button">Haircare</button>
            <button type="button" class="button">Oral Care</button>
            <button type="button" class="button">No Preference</button>
        </div><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
