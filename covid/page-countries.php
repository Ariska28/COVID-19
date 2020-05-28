<?php get_header(); ?>
<!-- 
Template Name: countries  
-->
<div class="s-base s-base--town" style="background-image: url(<?php the_field('backgroun_gallery') ?>);">
	<div class="l-container">
		<div class="s-base__wrapper">
			<div class="s-base__content s-base__content--black">
				<h1 class="el-caption el-caption--white">
					<?php the_field('headline') ?>
				</h1>
				<p class="el-description el-description--white">
					<?php the_field('headline_descr') ?>
				</p>
			</div>
		</div>
	</div>
</div>

<?php $apiResponse = wp_remote_request('https://api.covid19api.com/summary');
if (!is_wp_error($apiResponse)) {
	$response = json_decode($apiResponse['body']);
	$countries = $response->Countries;
	$global = $response->Global;
}
// 	echo
// 	"<pre>";
// 	var_dump($global);
// 	echo
// "</pre>";
?>

<div class="s-general">
	<div class="c-cases">
		<div class="c-cases__block">
			<div class="c-cases__block-header c-cases__block-header--light">
				<h3 class="el-caption-2">
					Recovered
				</h3>
				<span class="c-cases__block-numbers">
					<?= $global->TotalRecovered ?>
				</span>
				<p class="c-cases__block-description">
					Total cases
				</p>
			</div>

			<div class="c-cases__block-footer">
				<div class="c-cases__block-small c-cases__block-small--yellow">
					<span class="c-cases__block-numbers">
						<?= $global->NewRecovered ?>
					</span>
					<p class="c-cases__block-description">
						New cases
					</p>
				</div>

				<div class="c-cases__block-small c-cases__block-small--pink">
					<span class="c-cases__block-numbers">
						<?php $laterCases = $global->TotalRecovered - $global->NewRecovered; ?>
						<?= $laterCases ?>
					</span>
					<p class="c-cases__block-description">
						Later cases
					</p>
				</div>
			</div>
		</div>

		<div class="c-cases__block">
			<div class="c-cases__block-header c-cases__block-header--dark">
				<h3 class="el-caption-2">
					Death
				</h3>
				<span class="c-cases__block-numbers">
					<?= $global->TotalDeaths ?>
				</span>
				<p class="c-cases__block-description">
					Total cases
				</p>
			</div>

			<div class="c-cases__block-footer">
				<div class="c-cases__block-small c-cases__block-small--green">
					<span class="c-cases__block-numbers">
						<?= $global->NewDeaths ?>
					</span>
					<p class="c-cases__block-description">
						New cases
					</p>
				</div>

				<div class="c-cases__block-small c-cases__block-small--gray">
					<span class="c-cases__block-numbers">
						<?php $laterCases = $global->TotalDeaths - $global->NewDeaths; ?>
						<?= $laterCases ?>
					</span>
					<p class="c-cases__block-description">
						Later cases
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="s-general s-general--black">
	<div class="l-container">
		<h2 class="el-caption-2">
			<?php the_field('Title') ?>
		</h2>

		<p class="s-general__description">
			<?php the_field('Title_descr') ?>
		</p>
	</div>
</div>



<div class="s-table">
	<div class="l-container">

		<div class="s-table-header">
			<!-- <button class="s-table-header__btn">
				Alphabet
			</button>
			<button class="s-table-header__btn s-table-header__btn--last">
				New cases
			</button> -->
			<form class="s-table-header__form">
				<label class="s-table-header__form-label" for="site-search"></label>
				<input class="s-table-header__form-input" onkeyup="tableSearch()" type="search" placeholder="Search the site..." id="table-search" aria-label="Search through site content">
			</form>
		</div>

	<?php if ($countries) { ?>
			<div class="s-table-wrapper">
				<table class="s-table-tb" id="js-table">
					<thead class="s-table-tb__head">
						<tr class="s-table-tb__row s-table-tb__row--head">
							<th class="s-table-tb__cell">Country</th>
							<th class="s-table-tb__cell">Total cases</th>
							<th class="s-table-tb__cell">New cases</th>
							<th class="s-table-tb__cell">New deaths</th>
							<th class="s-table-tb__cell">Total recovered</th>
							<th class="s-table-tb__cell">Active cases</th>
							<th class="s-table-tb__cell">Death</th>
							<th class="s-table-tb__cell">Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
						function cmp($a, $b)
						{
							if ($a->TotalConfirmed == $b->TotalConfirmed) {
								return 0;
							}
							return ($a->TotalConfirmed < $b->TotalConfirmed) ? 1 : -1;
						}
						usort($countries, "cmp");
						foreach ($countries as $country) { ?>
							<tr class="s-table-tb__row">
								<td class="s-table-tb__cell"><?= $country->Country ?></td>
								<td class="s-table-tb__cell"><?= $country->TotalConfirmed ?></td>
								<td class="s-table-tb__cell"><?= $country->NewConfirmed ?></td>
								<td class="s-table-tb__cell"><?= $country->NewDeaths ?></td>
								<td class="s-table-tb__cell"><?= $country->TotalRecovered ?></td>
								<?php $activeCases = $country->TotalConfirmed - $country->TotalDeaths -  $country->TotalRecovered; ?>
								<td class="s-table-tb__cell"><?= $activeCases ?></td>
								<td class="s-table-tb__cell"><?= $country->TotalDeaths ?></td>
								<td class="s-table-tb__cell"><?= date('Y-m-d', strtotime($country->Date)) ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php } ?>

	</div>
</div>

<?php get_footer(); ?>