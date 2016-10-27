<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorainccc
 */

?>
<?php
		$year = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_year');
		$hieght = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_height');
		$highschool = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_high_school');
		$hometown =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_hometown');
		$jerseynumber =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_jersey_number');
		$sport = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_sport');
		$sport = strtolower($sport);
		$sport = str_replace(' ', '-', $sport);
		$secondaryposition = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_secondary_position');
		$secondaryposition = str_replace('-', ' ', $secondaryposition);
		$secondaryposition = trim($secondaryposition);
		
		switch($sport){
					case 'baseball':
										$position =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_position_baseball');
					break;
					case 'basketball':
										$position =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_position_basketball');
					break;
					case 'fastpitch-softball':
										$position =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_position_softball');
					break;
					case 'soccer':
										$position =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_position_soccer');
					break;
					case 'volleyball':
										$position =	lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_position_volleyball');
					break;
					default:
		}

?>
<tr>
	<td>
					<?php echo '<p>'.$jerseynumber.'</p>'; ?>
	</td>
	<td>
					<?php 	the_title( '<h4 class="roster-name">', '</h4>' ); ?>
	</td>
	<td>
				<?php 
								if( $secondaryposition != ''){
											echo '<p>'.$position.'/'.$secondaryposition.'</p>';
								}else{
											echo '<p>'.$position.'</p>';
								}
				?>
	</td>
	<td>
					<?php echo '<p>'.$year.'</p>'; ?>
	</td>
	<td>
				<?php echo '<p>'.$hieght.'</p>'; ?>
	</td>
	<td>
				<?php echo '<p>'.$highschool.'</p>'; ?>
	</td>
	<td>
				<?php echo '<p>'.$hometown.'</p>'; ?>
	</td>
</tr>

