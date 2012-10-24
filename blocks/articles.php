<h2>Derniers articles</h2>

<?php

$res = $db->query("SELECT t.id, t.poster, t.subject, t.posted, t.num_views, t.num_replies, t.num_likes, p.message FROM {$db->profile}topics AS t INNER JOIN {$db->profile}posts AS p ON p.id = t.first_post_id WHERE t.forum_id = 16 ORDER BY t.id DESC LIMIT 5");

$xbbc_lead = xbbc_ucode_parser();
$xbbc_meta = xbbc_ucode_parser();

$xbbc_lead->SetFlag(\XBBC\PARSE_LEAD);
$xbbc_meta->SetFlag(\XBBC\PARSE_META);

while($row = $db->fetch_assoc($res)):
	$meta = $xbbc_meta->Parse($row['message']);
	$art_url = "/article/{$row['id']}/".sluggify($row['subject']);
?>

<div class="content-block">
	<div class="last-news">
		<a href="<?php echo $art_url; ?>">
			<div class="last-news-title">
				<h3><?php echo htmlspecialchars($row['subject']); ?></h3>
				<div class="last-news-img">
					<img src="<?php echo $meta['thumb']; ?>"/>
					<div class="last-news-img-bar"></div>
				</div>
			</div>
		</a>
		<div class="last-news-infos">
			<abbr class="timeago-uc" title="<?php echo date('c', $row['posted']); ?>"><?php echo date('d/m/Y H:i', $row['posted']); ?></abbr>
			&ndash; <?php echo $row['num_views']; ?> <i class="icon-eye-open"></i>
			/ <a href="<?php echo $art_url; ?>#showcomments"><?php echo $row['num_replies']; ?> <i class="icon-comment"><i class="icon-comment"></i></i></a>
			/ <?php echo $row['num_likes']; ?> <i class="icon-heart"></i>
		</div>
		<?php
			echo $meta['desc'] ? $xbbc_lead->Parse($meta['desc']) : $xbbc_lead->Parse($row['message']);
		?>
	</div>
</div>

<?php
endwhile;
?>

<div class="button-wrapper"><a href="/articles" class="button">Tous les articles</a></div>
