<h1>Hello World!!!</h1>
<h3>PHP Version <pre><?= phpversion()?></pre></h3>

Hey, is RDS around?
<?php if ($_SERVER['RDS_HOSTNAME']): ?>
  <p><strong>YUP!</strong> RDS host name and other config are available in <code>$_SERVER</code>.</p>
<?php else: ?>
  <p><strong>NOPE!</strong> RDS host name and other config are NOT available in <code>$_SERVER</code>.</p>
<?php endif; ?>
