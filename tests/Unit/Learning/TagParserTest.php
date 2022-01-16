<?php

namespace Tests\Unit\Learning;

use App\LearningClasses\TestingJargon\TagParser;
use PHPUnit\Framework\TestCase;


class TagParserTest extends TestCase {

    protected TagParser $parser;

    public function setUp(): void
    {
        $this->parser = new TagParser;
    }

    public function test_it_parses_a_single_tag()
    {
        $result = $this->parser->parse('personal');
        $expected = ['personal'];
        $this->assertSame($result, $expected);
    }

    public function test_it_parses_a_comma_sepperated_list_of_tags()
    {
        $csl = 'personal, money, family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);
    }

    public function test_it_parses_a_pipe_sepperated_list_of_tags()
    {
        $csl = 'personal| money| family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);
    }

    public function test_spaces_are_optional()
    {
        $csl = 'personal,money,family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);

        $csl = 'personal|money|family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);
    }

    public function test_irregular_space_use_is_optional()
    {
        $csl = 'personal, money,family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);

        $csl = 'personal|money| family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);
    }

    public function test_can_use_either_commas_or_pipes()
    {
        $csl = 'personal|money,family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);

        $csl = 'personal,money|family';
        $result = $this->parser->parse($csl);
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($result, $expected);
    }

}
