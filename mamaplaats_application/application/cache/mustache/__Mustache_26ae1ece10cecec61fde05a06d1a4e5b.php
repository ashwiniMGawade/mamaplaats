<?php

class __Mustache_26ae1ece10cecec61fde05a06d1a4e5b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Categorieen</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="/admin/coupon/category" class="btn right">Categorie Toevoegen</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2><i class="icon-camera edit"></i><span class="break"></span>Categorieen</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-content">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '				<table class="table table-striped table-bordered bootstrap-datatable datatable">';
        $buffer .= "\n";
        $buffer .= $indent . '					<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Omschrijving</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Populair</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Acties</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-bar"></i> <a href="/admin/coupon/category/1" class="boldtext">Outdoor</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Outdoor...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/1">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=1" onclick="return confirm(\'Weet je zeker dat je \\\'Outdoor\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-airport"></i> <a href="/admin/coupon/category/3" class="boldtext">Vakantie en recreatie</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Vakantie en recreatie...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/3">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=3" onclick="return confirm(\'Weet je zeker dat je \\\'Vakantie en recreatie\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-shirt"></i> <a href="/admin/coupon/category/4" class="boldtext">Fashion</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Fashion...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/4">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=4" onclick="return confirm(\'Weet je zeker dat je \\\'Fashion\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-bottle"></i> <a href="/admin/coupon/category/7" class="boldtext">Lifestyle</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Lifestyle...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/7">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=7" onclick="return confirm(\'Weet je zeker dat je \\\'Lifestyle\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-bed"></i> <a href="/admin/coupon/category/10" class="boldtext">Inrichting &amp; Decoratie</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Inrichting &amp; Dedcoratie...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/10">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=10" onclick="return confirm(\'Weet je zeker dat je \\\'Inrichting &amp; Decoratie\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-bed"></i> <a href="/admin/coupon/category/11" class="boldtext">Uitzet</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Uitzet...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/11">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=11" onclick="return confirm(\'Weet je zeker dat je \\\'Uitzet\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-picture"></i> <a href="/admin/coupon/category/12" class="boldtext">Kaarten</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Kaarten...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/12">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=12" onclick="return confirm(\'Weet je zeker dat je \\\'Kaarten\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-christmas_gift"></i> <a href="/admin/coupon/category/13" class="boldtext">Speelgoed, entertainment &amp; cadeaus</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Speelgoed, entertainment &amp; cadeaus...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/13">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=13" onclick="return confirm(\'Weet je zeker dat je \\\'Speelgoed, entertainment &amp; cadeaus\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-ring"></i> <a href="/admin/coupon/category/14" class="boldtext">Sieraden</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Sieraden...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/14">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=14" onclick="return confirm(\'Weet je zeker dat je \\\'Sieraden\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-books"></i> <a href="/admin/coupon/category/17" class="boldtext">Educatie</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Educatie...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/17">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=17" onclick="return confirm(\'Weet je zeker dat je \\\'Educatie\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-recurring_appointment"></i> <a href="/admin/coupon/category/18" class="boldtext">Algemeen</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Algemeen...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/18">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=18" onclick="return confirm(\'Weet je zeker dat je \\\'Algemeen\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-moneybox"></i> <a href="/admin/coupon/category/20" class="boldtext">Winacties</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Winacties...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Ja</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/20">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=20" onclick="return confirm(\'Weet je zeker dat je \\\'Winacties\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td><i class="coupon-icon-shoe_man"></i> <a href="/admin/coupon/category/21" class="boldtext">Schoenen</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Schoenen...</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>Nee</td>';
        $buffer .= "\n";
        $buffer .= $indent . '							<td>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/category/21">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '								<a class="btn" href="/admin/coupon/categories?delete_id=21" onclick="return confirm(\'Weet je zeker dat je \\\'Schoenen\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '								</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '				</table>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}