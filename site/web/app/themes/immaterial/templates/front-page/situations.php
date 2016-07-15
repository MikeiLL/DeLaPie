<?php

$contact_our_office = '<p>Please <a href="/contact/">contact my office</a> for a free case evaluation. </p>';
$situations = array(
"Falls"=>"Falls are one of the most common injuries in long-term care facilities. According to the <abbr>CDC</abbr>, between 50% and 75% of nursing home residents fall each year.  That’s twice the rate of falls among older adults living in the community.  Residents often fall more than once and about 35% of fall injuries occur among residents who cannot walk.  About 10% to 20% of nursing home falls cause serious injuries; 2% to 6% cause fractures.  The law requires facilities to implement and maintain fall prevention measures to protect residents, but facilities must be proactive in order to do so successfully.  The <abbr>CDC</abbr> reports that restraints do not help prevent falls.  Muscle weakness, gait problems, wet floors, poor lighting, incorrect bed height, improperly fitted wheelchairs, certain medicines, poor foot care, poorly fitting shoes, improper or incorrect use of walking aids, inattentive staff and low staff-to-resident ratios increase risk of falls in elders.",
"Bedsores"=>"Bedsores (also known as decubitus ulcers, pressure ulcers or pressure sores) are one of the most common injuries in long-term care facilities.  According to the <abbr>CDC</abbr>, approximately 1 in 10 nursing home residents had a bedsore.  They develop when a resident is left in one position for too long and commonly form where bones are close to skin, such as the heel, ankle, tailbone, hip, shoulder, back, elbow, and back of the head.  Left unchecked serious infection can develop resulting in amputation, sepsis or death.  The law requires facilities to be proactive in preventing bedsores by keeping skin clean and dry, changing position and using pillows and products that relieve pressure, for example.  Thus, if your loved one is developing bed sores, it may be a sign that the nursing staff is neglecting its duties or not providing the appropriate level of care.",
"Medication Errors"=>"",
"Infections"=>"",
"Wrongful Death"=>"",
"Dehydration"=>"",
"Malnutrition"=>"",
"Asphyxiation"=>"",
"Poor Hygiene"=>"",
"Sexual Abuse"=>"",
"Sepsis"=>"",
"Fractures"=>"",
"Unexplained Injuries"=>""

 );
?>
      <ul class="items definitions">
<?php $count = 0;
foreach($situations as $situation => $definition):
  $count++;
  if ($definition == "")
    $definition = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam urna urna, pretium eu pretium in, dictum nec nisl. Proin vehicula convallis mi, in vestibulum magna laoreet eget. Duis quis dignissim nibh, at aliquet elit. Mauris ultrices a sapien quis hendrerit. Pellentesque in nisi dui. Pellentesque commodo diam sapien, eget egestas elit rutrum sodales. Etiam sapien nisi, pretium eu consequat ut, sollicitudin vitae erat.";
  ?>
         <li class="list__item <?= str_replace(array(' ', '&amp;'), array('-', ''), $situation) ?>" >
          <button class="btn active list-def" data-gk-close-span-glyph="active" data-gk-open-span-glyph="closed" data-gk-open-class="<?= $count ?>" data-gk-area-state="closed"><?= $situation ?></button>
          <div class="response-definition <?= $count ?>">
            <p><?= $definition ?></p>
            <?= $contact_our_office ?>
          </div>
        </li>
  <?php endforeach; ?>
      </ul>
