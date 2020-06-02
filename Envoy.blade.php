@setup
$repo = 'https://github.com/tolbertdesign/system';
$branch = $branch ?? 'master';
$remote = $remote ?? 'gentle-breeze';
$site = 'tolbert.design';
$release_dir = '/home/forge/releases/' . $site;
$app_dir = '/home/forge/' . $site;
$release = 'release_' . date('Y-md-Hi-s');
function logMessage($message) {
    return "echo '\033[32m" .$message. "\033[0m';\n";
}
@endsetup

@servers(['localhost' => '127.0.0.1', 'remote' => $remote])

@macro('deploy', ['on' => 'remote'])
fetch_repo
checkout_branch
run_composer
run_yarn
generate_assets
update_permissions
update_symlinks
@endmacro

@task('fetch_repo')
{{ logMessage("[0/6] 🚀  Fetching the ".$repo." repository…") }}
@endtask

@task('checkout_branch')
{{ logMessage("[1/6] 🌀  Checking out the " . $branch . " branch…") }}
@endtask

@task('run_composer')
{{ logMessage("[2/6] 🚚  Running Composer…") }}
@endtask

@task('run_yarn', ['on' => 'remote'])
{{ logMessage("[3/6] 📦  Running Yarn…") }}
@endtask

@task('generate_assets', ['on' => 'remote'])
{{ logMessage("[4/6] 🌅  Generating assets…") }}
@endtask

@task('update_permissions')
{{ logMessage("[5/6] 🔑  Updating permissions…") }}
@endtask

@task('update_symlinks')
{{ logMessage("[6/6] 🔗  Updating symlinks…") }}
@endtask
