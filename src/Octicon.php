<?php declare(strict_types=1);

namespace Octicons;

use Octicons\Exceptions\DataFileException;
use Octicons\Exceptions\OcticonException;

/**
 * @package Octicons
 *
 * @method static string plus(array $options = [])
 * @method static string primitive_dot(array $options = [])
 * @method static string primitive_square(array $options = [])
 * @method static string quote(array $options = [])
 * @method static string three_bars(array $options = [])
 * @method static string triangle_down(array $options = [])
 * @method static string triangle_left(array $options = [])
 * @method static string triangle_right(array $options = [])
 * @method static string triangle_up(array $options = [])
 * @method static string kebab_horizontal(array $options = [])
 * @method static string kebab_vertical(array $options = [])
 * @method static string screen_full(array $options = [])
 * @method static string screen_normal(array $options = [])
 * @method static string x(array $options = [])
 * @method static string grabber(array $options = [])
 * @method static string plus_small(array $options = [])
 * @method static string pulse(array $options = [])
 * @method static string star(array $options = [])
 * @method static string stop(array $options = [])
 * @method static string sync(array $options = [])
 * @method static string text_size(array $options = [])
 * @method static string report(array $options = [])
 * @method static string link_external(array $options = [])
 * @method static string checklist(array $options = [])
 * @method static string cloud_download(array $options = [])
 * @method static string cloud_upload(array $options = [])
 * @method static string fold_up(array $options = [])
 * @method static string fold_down(array $options = [])
 * @method static string fold(array $options = [])
 * @method static string tasklist(array $options = [])
 * @method static string history(array $options = [])
 * @method static string dash(array $options = [])
 * @method static string list_ordered(array $options = [])
 * @method static string list_unordered(array $options = [])
 * @method static string reply(array $options = [])
 * @method static string mute(array $options = [])
 * @method static string comment_discussion(array $options = [])
 * @method static string comment(array $options = [])
 * @method static string ellipsis(array $options = [])
 * @method static string heart(array $options = [])
 * @method static string horizontal_rule(array $options = [])
 * @method static string info(array $options = [])
 * @method static string italic(array $options = [])
 * @method static string unverified(array $options = [])
 * @method static string verified(array $options = [])
 * @method static string question(array $options = [])
 * @method static string unfold(array $options = [])
 * @method static string sign_in(array $options = [])
 * @method static string sign_out(array $options = [])
 * @method static string alert(array $options = [])
 * @method static string arrow_down(array $options = [])
 * @method static string arrow_left(array $options = [])
 * @method static string arrow_right(array $options = [])
 * @method static string arrow_up(array $options = [])
 * @method static string arrow_both(array $options = [])
 * @method static string arrow_small_down(array $options = [])
 * @method static string arrow_small_left(array $options = [])
 * @method static string arrow_small_right(array $options = [])
 * @method static string arrow_small_up(array $options = [])
 * @method static string check(array $options = [])
 * @method static string chevron_down(array $options = [])
 * @method static string chevron_left(array $options = [])
 * @method static string chevron_right(array $options = [])
 * @method static string chevron_up(array $options = [])
 * @method static string circle_slash(array $options = [])
 * @method static string bold(array $options = [])
 * @method static string mention(array $options = [])
 * @method static string skip(array $options = [])
 * @method static string primitive_dot_stroke(array $options = [])
 * @method static string beaker(array $options = [])
 * @method static string bell(array $options = [])
 * @method static string briefcase(array $options = [])
 * @method static string credit_card(array $options = [])
 * @method static string device_camera_video(array $options = [])
 * @method static string device_camera(array $options = [])
 * @method static string device_desktop(array $options = [])
 * @method static string device_mobile(array $options = [])
 * @method static string gift(array $options = [])
 * @method static string gear(array $options = [])
 * @method static string book(array $options = [])
 * @method static string tag(array $options = [])
 * @method static string telescope(array $options = [])
 * @method static string tools(array $options = [])
 * @method static string trashcan(array $options = [])
 * @method static string unmute(array $options = [])
 * @method static string watch(array $options = [])
 * @method static string key(array $options = [])
 * @method static string archive(array $options = [])
 * @method static string light_bulb(array $options = [])
 * @method static string link(array $options = [])
 * @method static string location(array $options = [])
 * @method static string lock(array $options = [])
 * @method static string mail_read(array $options = [])
 * @method static string mail(array $options = [])
 * @method static string megaphone(array $options = [])
 * @method static string bookmark(array $options = [])
 * @method static string calendar(array $options = [])
 * @method static string clippy(array $options = [])
 * @method static string clock(array $options = [])
 * @method static string desktop_download(array $options = [])
 * @method static string globe(array $options = [])
 * @method static string home(array $options = [])
 * @method static string inbox(array $options = [])
 * @method static string law(array $options = [])
 * @method static string milestone(array $options = [])
 * @method static string mortar_board(array $options = [])
 * @method static string package(array $options = [])
 * @method static string pencil(array $options = [])
 * @method static string pin(array $options = [])
 * @method static string plug(array $options = [])
 * @method static string rocket(array $options = [])
 * @method static string search(array $options = [])
 * @method static string note(array $options = [])
 * @method static string shield_lock(array $options = [])
 * @method static string dashboard(array $options = [])
 * @method static string graph(array $options = [])
 * @method static string settings(array $options = [])
 * @method static string project(array $options = [])
 * @method static string play(array $options = [])
 * @method static string github_action(array $options = [])
 * @method static string shield_check(array $options = [])
 * @method static string shield_x(array $options = [])
 * @method static string shield(array $options = [])
 * @method static string saved(array $options = [])
 * @method static string unsaved(array $options = [])
 * @method static string code(array $options = [])
 * @method static string git_branch(array $options = [])
 * @method static string diff_added(array $options = [])
 * @method static string diff_ignored(array $options = [])
 * @method static string diff_modified(array $options = [])
 * @method static string diff_removed(array $options = [])
 * @method static string diff_renamed(array $options = [])
 * @method static string diff(array $options = [])
 * @method static string circuit_board(array $options = [])
 * @method static string gist(array $options = [])
 * @method static string git_commit(array $options = [])
 * @method static string git_compare(array $options = [])
 * @method static string git_merge(array $options = [])
 * @method static string git_pull_request(array $options = [])
 * @method static string issue_closed(array $options = [])
 * @method static string issue_opened(array $options = [])
 * @method static string issue_reopened(array $options = [])
 * @method static string database(array $options = [])
 * @method static string no_newline(array $options = [])
 * @method static string broadcast(array $options = [])
 * @method static string keyboard(array $options = [])
 * @method static string file_binary(array $options = [])
 * @method static string file_code(array $options = [])
 * @method static string file_directory(array $options = [])
 * @method static string file_media(array $options = [])
 * @method static string file_pdf(array $options = [])
 * @method static string file_submodule(array $options = [])
 * @method static string file_symlink_directory(array $options = [])
 * @method static string file_symlink_file(array $options = [])
 * @method static string file_zip(array $options = [])
 * @method static string browser(array $options = [])
 * @method static string file(array $options = [])
 * @method static string repo_clone(array $options = [])
 * @method static string repo_force_push(array $options = [])
 * @method static string repo_forked(array $options = [])
 * @method static string repo_pull(array $options = [])
 * @method static string repo_push(array $options = [])
 * @method static string repo(array $options = [])
 * @method static string mirror(array $options = [])
 * @method static string ruby(array $options = [])
 * @method static string server(array $options = [])
 * @method static string terminal(array $options = [])
 * @method static string radio_tower(array $options = [])
 * @method static string rss(array $options = [])
 * @method static string versions(array $options = [])
 * @method static string request_changes(array $options = [])
 * @method static string dependent(array $options = [])
 * @method static string repo_template(array $options = [])
 * @method static string repo_template_private(array $options = [])
 * @method static string workflow(array $options = [])
 * @method static string workflow_all(array $options = [])
 * @method static string squirrel(array $options = [])
 * @method static string zap(array $options = [])
 * @method static string flame(array $options = [])
 * @method static string bug(array $options = [])
 * @method static string person(array $options = [])
 * @method static string smiley(array $options = [])
 * @method static string hubot(array $options = [])
 * @method static string thumbsdown(array $options = [])
 * @method static string thumbsup(array $options = [])
 * @method static string organization(array $options = [])
 * @method static string gist_secret(array $options = [])
 * @method static string eye(array $options = [])
 * @method static string eye_closed(array $options = [])
 * @method static string jersey(array $options = [])
 * @method static string octoface(array $options = [])
 * @method static string mark_github(array $options = [])
 * @method static string logo_github(array $options = [])
 * @method static string logo_gist(array $options = [])
 * @method static string markdown(array $options = [])
 * @method static string paintcan(array $options = [])
 */
class Octicon
{
    /**
     * @var array
     */
    private static $icons = [];

    /**
     * @param string $iconName
     * @param Options|null $options
     *
     * @return Icon
     *
     * @throws OcticonException
     * @throws DataFileException
     */
    public function icon(string $iconName, Options $options = null): Icon
    {
        self::loadDataFileContent();

        if (!isset(self::$icons[$iconName])) {
            throw new OcticonException("Could not find icon: {$iconName}");
        }

        if ($options === null) {
            $options = new Options();
        }

        return new Icon(self::$icons[$iconName], $options);
    }

    /**
     * @return array
     *
     * @throws DataFileException
     */
    public function all(): array
    {
        self::loadDataFileContent();

        return self::$icons;
    }

    /**
     * @param string $iconName
     * @param array $parameters
     *
     * @return string
     *
     * @throws OcticonException
     * @throws DataFileException
     */
    public static function __callStatic(string $iconName, array $parameters)
    {
        if (!empty($parameters)) {
            if (\count($parameters) > 1 || !\is_array($parameters[0])) {
                throw new OcticonException('Function accepts only 1 parameter and it should be an array');
            }
        }

        self::loadDataFileContent();

        $iconName = strtolower($iconName);
        $iconName = str_replace('_', '-', $iconName);

        if (!isset(self::$icons[$iconName])) {
            throw new OcticonException("Could not find icon: {$iconName}");
        }

        $options = new Options();

        if (isset($parameters[0]['classes'])) {
            $options->addClass($parameters[0]['classes']);
        }

        if (isset($parameters[0]['ratio'])) {
            $options->setRatio($parameters[0]['ratio']);
        }

        return (new Icon(self::$icons[$iconName], $options))->toSvg();
    }

    /**
     * @return void
     *
     * @throws DataFileException
     */
    private static function loadDataFileContent()
    {
        $dataFilePath = self::getDataFilePath();

        if (!empty(self::$icons)) {
            return;
        }

        if (!is_readable($dataFilePath)) {
            throw new DataFileException("Data file is not readable: '{$dataFilePath}'");
        }

        $content = \file_get_contents($dataFilePath);

        $decodedContent = \json_decode($content, true);
        if ($decodedContent === null || json_last_error() !== JSON_ERROR_NONE) {
            throw new DataFileException('Failed to parse data json: ' .json_last_error_msg());
        }

        self::$icons = $decodedContent;
    }

    /**
     * @return string
     */
    protected static function getDataFilePath(): string
    {
        return __DIR__.'/../resources/data.json';
    }
}
